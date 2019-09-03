<?php

namespace Mediatis\FormrelayConfirmationMail\Destination;

use Mediatis\Formrelay\Destination\AbstractDestination;
use Mediatis\FormrelayConfirmationMail\DataDispatcher\ConfirmationMailDispatcher;

class ConfirmationMail extends AbstractDestination
{
    protected function getDispatcher(array $conf, array $data, array $context)
    {
        $sender = $conf['senderEmail'];
        $recipient = $conf['recipientEmail'];
        $subject = $conf['subject'];
        $plainContentTemplate = $conf['plainContent'];
        $htmlContentTemplate = $conf['htmlContent'];
        $recipientName = $conf['recipientName'];
        $senderName = $conf['senderName'];
        $includeAttachmentsInMail = $conf['includeAttachmentsInMail'];
        $dispatcher = $this->objectManager->get(
            ConfirmationMailDispatcher::class,
            $recipient,
            $sender,
            $subject,
            $plainContentTemplate,
            $htmlContentTemplate,
            $recipientName,
            $senderName,
            $includeAttachmentsInMail
        );
        return $dispatcher;
    }

    public function getExtensionKey(): string
    {
        return "tx_formrelay_confirmation_mail";
    }
}
