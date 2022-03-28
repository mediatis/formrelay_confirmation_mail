<?php

namespace Mediatis\FormrelayConfirmationMail;

use FormRelay\Core\Service\RegistryInterface;
use Mediatis\FormrelayConfirmationMail\DataDispatcher\ConfirmationMailDataDispatcher;
use Mediatis\FormrelayConfirmationMail\Route\ConfirmationMailRoute;
use Mediatis\FormrelayMail\Manager\MailManager;

class Initialization
{
    /**
     * @param RegistryInterface $registry
     * @return void
     */
    public function initialize(RegistryInterface $registry)
    {
        $registry->registerDataDispatcher(ConfirmationMailDataDispatcher::class, [
            new MailManager(),
        ]);
        $registry->registerRoute(ConfirmationMailRoute::class);
    }
}
