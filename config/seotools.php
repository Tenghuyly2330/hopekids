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
                "Special education in Cambodia",
                "Autism school",
                "Special child needs school",
                "Autism school in Cambodia",
                "Autism school in Phnom Penh",
                "Special Education School in Cambodia",
                "About Autism and Autism school",
                "Speech therapy in Cambodia",
                "Speech therapist in Cambodia",
                "Occupational therapist in Cambodia",
                "Occupational therapy in Cambodia",
                "Special School in Phnom Penh",
                "Special Education",
                "Special Education in Phnom Penh",
                "Special Education in Cambodia",
                "Best Special Education School in Phnom Penh",
                "Best Special Education School in Cambodia",
                "Help child with autism school",
                "Help child to speak in school",
                "Physiotherapist in Cambodia",
                "Physiotherapy in Cambodia",
                "Physiotherapy in Phnom Penh",
                "Hope kids",
                "Autism",
                "Autistic",
                "Down syndrome",
                "ADHD",
                "School",
                "Special needs",
                "Speech therapy",
                "Speech therapist",
                "Physiotherapy",
                "Occupational Therapist",
                "Occupational Therapy",
                "Psychology",
                "Psychologist",
                "Counseling",
                "Awareness",
                "Workshops",
                "Diet plan",
                "Behavioral training",
                "Water therapy",
                "Play therapy",
                "Special needs school",
                "ABA in Cambodia",
                "ABA in Phnom Penh",
                "ABAT in Cambodia",
                "ABAT in Phnom Penh",
                "ABAT",
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
