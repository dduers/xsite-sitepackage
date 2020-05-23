<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'XSite Sitepackage',
    'description' => 'TYPO3 Sitepackage',
    'category' => 'templates',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Daniel Dürsteler',
    'author_email' => 'daniel.duersteler@gmail.com',
    'author_company' => 'XSite Web Development & Design',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'rte_ckeditor' => '9.5.0-10.4.99',
        ],
        'conflicts' => [
            'themes' => '*',
            'fluidpages' => '*',
        ],
    ],
];
