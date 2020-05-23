<?php

/**
 * Extension Manager/Repository config file for ext "xsite_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'XSite Sitepackage',
    'description' => 'TYPO3 Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'XsiteWebDevelopmentDesign\\XsiteSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Daniel Duersteler',
    'author_email' => 'daniel.duersteler@gmail.com',
    'author_company' => 'XSite Web Development &amp; Design',
    'version' => '1.0.0',
];
