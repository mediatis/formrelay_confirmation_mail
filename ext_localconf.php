<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

(function() {
    \Mediatis\Formrelay\Utility\RegistrationUtility::registerInitialization(\Mediatis\FormrelayConfirmationMail\Initialization::class);
})();
