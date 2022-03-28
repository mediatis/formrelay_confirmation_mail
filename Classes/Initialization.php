<?php

namespace Mediatis\FormrelayConfirmationMail;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\ConfirmationMail\ConfirmationMailInitialization;

class Initialization
{
    public function initialize(RegistryInterface $registry)
    {
        ConfirmationMailInitialization::initialize($registry);
    }
}
