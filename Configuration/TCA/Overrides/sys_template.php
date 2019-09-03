<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'formrelay_confirmation_mail',
    'Configuration/TypoScript',
    'FormRelay Confirmation Mail'
);
