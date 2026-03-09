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
                if (!$blog) $blog = page('blog');
                
                $siteTitle = site()->title()->or('Idle Sparks')->value();
                $siteDesc = site()->description()->or('')->value();
                $siteUrl = site()->url();
                
                $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
                $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">' . "\n";
                $xml .= '  <channel>' . "\n";
                $xml .= '    <title>' . htmlspecialchars($siteTitle) . '</title>' . "\n";
                $xml .= '    <link>' . htmlspecialchars($siteUrl) . '</link>' . "\n";
                $xml .= '    <description>' . htmlspecialchars($siteDesc) . '</description>' . "\n";
                $xml .= '    <language>en-us</language>' . "\n";
                $xml .= '    <lastBuildDate>' . date('r') . '</lastBuildDate>' . "\n";
                $xml .= '    <atom:link href="' . htmlspecialchars($siteUrl) . '/rss.xml" rel="self" type="application/rss+xml"/>' . "\n";
                
                if ($blog) {
                    foreach ($blog->children() as $child) {
                        $title = $child->title()->value();
                        $url = $child->url();
                        $dateField = $child->date();
                        // Check if date is not empty and convert properly
                        if ($dateField && is_object($dateField) && method_exists($dateField, 'toUnix')) {
                            $timestamp = (int) $dateField->toUnix();
                            $pubDate = $timestamp > 0 ? date('r', $timestamp) : date('r');
                        } else {
                            $pubDate = date('r');
                        }
                        $desc = $child->intro()->or($child->description())->value();
                        
                        $xml .= '    <item>' . "\n";
                        $xml .= '      <title>' . htmlspecialchars($title) . '</title>' . "\n";
                        $xml .= '      <link>' . htmlspecialchars($url) . '</link>' . "\n";
                        $xml .= '      <guid isPermaLink="true">' . htmlspecialchars($url) . '</guid>' . "\n";
                        $xml .= '      <pubDate>' . $pubDate . '</pubDate>' . "\n";
                        $xml .= '      <description><![CDATA[' . $desc . ']]></description>' . "\n";
                        $xml .= '    </item>' . "\n";
                    }
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
