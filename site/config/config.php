<?php

return [
    'debug' => false,
    'panel' => [
        'install' => true
    ],
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $pages = site()->pages()->index();
                $content = snippet('sitemap', ['pages' => $pages], true);
                return new Kirby\Http\Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return go('sitemap.xml');
            }
        ],
        [
            'pattern' => 'rss.xml',
            'action'  => function () {
                $blog = page('1_blog');
                $articles = $blog ? $blog->children()->sortBy('date', 'desc')->limit(20) : [];
                
                $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
                $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">' . "\n";
                $xml .= '  <channel>' . "\n";
                $xml .= '    <title>' . htmlspecialchars(option('title')) . '</title>' . "\n";
                $xml .= '    <link>' . site()->url() . '</link>' . "\n";
                $xml .= '    <description>' . htmlspecialchars(site()->description()) . '</description>' . "\n";
                $xml .= '    <language>en-us</language>' . "\n";
                $xml .= '    <lastBuildDate>' . date('r') . '</lastBuildDate>' . "\n";
                $xml .= '    <atom:link href="' . site()->url() . '/rss.xml" rel="self" type="application/rss+xml"/>' . "\n";
                
                foreach ($articles as $article) {
                    $xml .= '    <item>' . "\n";
                    $xml .= '      <title>' . htmlspecialchars($article->title()->value()) . '</title>' . "\n";
                    $xml .= '      <link>' . $article->url() . '</link>' . "\n";
                    $xml .= '      <guid isPermaLink="true">' . $article->url() . '</guid>' . "\n";
                    $xml .= '      <pubDate>' . date('r', $article->date()->toUnix()) . '</pubDate>' . "\n";
                    $desc = $article->intro()->or($article->description())->value();
                    $xml .= '      <description><![CDATA[' . $desc . ']]></description>' . "\n";
                    $xml .= '    </item>' . "\n";
                }
                
                $xml .= '  </channel>' . "\n";
                $xml .= '</rss>';
                
                return new Kirby\Http\Response($xml, 'application/rss+xml');
            }
        ],
        [
            'pattern' => 'rss',
            'action'  => function () {
                return go('rss.xml');
            }
        ]
    ]
];
