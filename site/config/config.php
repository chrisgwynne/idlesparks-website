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
        ]
    ]
];
