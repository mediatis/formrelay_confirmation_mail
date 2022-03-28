<?php

namespace Mediatis\FormrelayConfirmationMail;

use FormRelay\ConfirmationMail\DataDispatcher\ConfirmationMailDataDispatcher;
use FormRelay\Core\Service\RegistryInterface;
use FormRelay\ConfirmationMail\ConfirmationMailInitialization;
use Mediatis\FormrelayMail\Manager\MailManager;

class Initialization
{
    public function initialize(RegistryInterface $registry)
    {
        ConfirmationMailInitialization::initialize($registry);
        $registry->registerDataDispatcher(ConfirmationMailDataDispatcher::class, [
            new MailManager(),
        ]);

    }
}
