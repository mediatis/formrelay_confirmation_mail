<?php

namespace Mediatis\FormrelayConfirmationMail;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\Mail\ConfirmationMailInitialization;
use FormRelay\Mail\DataDispatcher\MailDataDispatcher;
use FormRelay\Mail\MailInitialization;
use Mediatis\FormrelayMail\Manager\MailManager;

class Initialization
{
    public function initialize(RegistryInterface $registry)
    {
        ConfirmationMailInitialization::initialize($registry);
    }
}
