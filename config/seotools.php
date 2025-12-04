<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'For those who helped create the Genki Dama', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                "Best School"
            ],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index, follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
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
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => '', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => "website",
            'site_name'   => "Hope Kids School",
            'images'      => ['https://hopekids-edu.com/public/assets/images/logo_new.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@HopeKidsSchool',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => '', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://hopekids-edu.com/public/assets/images/logo_new.png'],
        ],
    ],
];
