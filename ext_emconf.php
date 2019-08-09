<?php

/**
 * Extension Manager/Repository config file for ext "kpt_web".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KPT e.V.',
    'description' => 'Kunst.Projekt.Tanne',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KptEv\\KptEv\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sebastian Fuchs',
    'author_email' => 'sf@kpt-ev.de',
    'author_company' => 'KPT e.V.',
    'version' => '1.0.0',
];
