<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Vithu Trust Fund", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => 'Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => '',
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
            'title'       => 'Vithu Trust Fund', // set false to total remove
            'description' => 'Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.', // set false to total remove
            'url'         => true, // Set null for using Url::current(), set false to total remove
            'type'        => true,
            'site_name'   => 'vithutrustfund',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@vithutrustfund',
            'creator'      => '@vithutrustfund',
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'name'       => 'Vithu Trust Fund', // set false to total remove
            'title'       => 'Vithu Trust Fund', // set false to total remove
            'description' => 'Vithu Trust Fund is a charity organisation dedicated to improve and safeguard the lives of children in Sri Lanka and raise voice for the needy.', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
