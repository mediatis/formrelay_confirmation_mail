<?php

########################################################################
# Extension Manager/Repository config file for ext: "formrelay_confirmation_mail"
#
# Auto generated 13-05-2009 13:55
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Confirmation Mail Plugin',
    'description' => 'Send form Confirmation Mails via FormHandlers',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'shy' => '',
    'dependencies' => 'cms',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'author_company' => '',
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'cms' => '',
            'formrelay' => '0.0.9',
            'formrelay_mail' => '0.0.3',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'suggests' => array(
    ),
);
