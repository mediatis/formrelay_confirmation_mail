<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Relay - Confirmation Mail Plugin',
    'description' => 'Send form data as Confirmation Mail',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'formrelay' => '>=5.1.0',
            'formrelay_mail' => '>=5.0.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
