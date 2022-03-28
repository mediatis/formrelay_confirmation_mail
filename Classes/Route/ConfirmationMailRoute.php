<?php

namespace Mediatis\FormrelayConfirmationMail\Route;

use FormRelay\Mail\Route\AbstractMailRoute;
use Mediatis\FormrelayConfirmationMail\DataDispatcher\ConfirmationMailDataDispatcher;

class ConfirmationMailRoute extends AbstractMailRoute
{
    const DATA_DISPATCHER_KEYWORD = 'confirmationMail';
    const KEY_FROM = 'sender';
    const KEY_TO = 'recipient';
    const KEY_SUBJECT = 'subject';
    const KEY_ATTACH_UPLOADED_FILES = 'includeAttachmentsInMail';
    const KEY_PLAIN_CONTENT_TEMPLATE = 'plainContent';
    const KEY_HTML_CONTENT_TEMPLATE = 'htmlContent';

    /**
     * @return ConfirmationMailDataDispatcher
     */
    protected function getDispatcher()
    {
        /** @var ConfirmationMailDataDispatcher $dispatcher */
        $dispatcher = $this->registry->getDataDispatcher(static::DATA_DISPATCHER_KEYWORD);

        $from = $this->resolveContent($this->getConfig(static::KEY_FROM));
        $dispatcher->setFrom($from);

        $to = $this->resolveContent($this->getConfig(static::KEY_TO));
        $dispatcher->setTo($to);

        $subject = $this->resolveContent($this->getConfig(static::KEY_SUBJECT));
        $dispatcher->setSubject($subject);

        $attachUploadedFiles = $this->resolveContent($this->getConfig(static::KEY_ATTACH_UPLOADED_FILES));
        $dispatcher->setAttachUploadedFiles($attachUploadedFiles);

        $plainBody = $this->resolveContent($this->getConfig(static::KEY_PLAIN_CONTENT_TEMPLATE));
        $dispatcher->setPlainBody($plainBody);

        $htmlBody = $this->resolveContent($this->getConfig(static::KEY_HTML_CONTENT_TEMPLATE));
        $dispatcher->setHtmlBody($htmlBody);

        return $dispatcher;
    }
}
