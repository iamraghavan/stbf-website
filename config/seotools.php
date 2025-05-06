<?php
return [
    'meta' => [
        'defaults' => [
            'title'        => 'Sri Thiruthani Builders & Foundation',
            'titleBefore'  => false,
            'description'  => 'Sri Thiruthani Builders & Foundation offers expert building construction, interiors, renovation, architectural planning, and bank loan estimation services tailored to your vision.',
            'separator'    => ' | ',
            'keywords'     => ['building construction', 'home interiors', 'architectural planning', 'renovation services', 'loan estimation', 'Sri Thiruthani Builders'],
            'canonical'    => 'full',
            'robots'       => 'index, follow',
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Sri Thiruthani Builders & Foundation',
            'description' => 'Expert building, interiors, renovations, planning, and loan estimation services in your city by Sri Thiruthani Builders & Foundation.',
            'url'         => 'full',
            'type'        => 'website',
            'site_name'   => 'Sri Thiruthani Builders & Foundation',
            'images'      => ['/assets/r_files/stbf_website.webp'], // Hardcode path or use full URL
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
            'site' => '@raghavanjeeva',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Sri Thiruthani Builders & Foundation',
            'description' => 'Your trusted partner for quality construction, interiors, renovations, architectural services, and loan estimations in your city.',
            'url'         => 'full',
            'type'        => 'WebPage',
            'images'      => ['/assets/r_files/stbf_website.webp'], // Hardcode path or use full URL
        ],
    ],
];