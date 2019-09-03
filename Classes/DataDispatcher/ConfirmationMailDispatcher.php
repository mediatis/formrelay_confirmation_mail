<?php
namespace Mediatis\FormrelayConfirmationMail\DataDispatcher;

use Mediatis\FormrelayMail\DataDispatcher\AbstractMailDispatcher;
use Mediatis\Formrelay\ConfigurationResolver\ContentResolver\GeneralContentResolver;

class ConfirmationMailDispatcher extends AbstractMailDispatcher
{
    protected $recipientName;
    protected $senderName;
    protected $plainContentTemplate;
    protected $htmlContentTemplate;

    public function __construct($recipients, $sender, $subject, $plainContentTemplate, $htmlContentTemplate, $recipientName, $senderName, $includeAttachmentsInMail = false)
    {
        parent::__construct($recipients, $sender, $subject, $includeAttachmentsInMail);
        $this->recipientName = $recipientName;
        $this->senderName = $senderName;
        $this->plainContentTemplate = $plainContentTemplate;
        $this->htmlContentTemplate = $htmlContentTemplate;
    }

    protected function processTemplate($template, &$data): string
    {
        $contentResolver = $this->objectManager->get(GeneralContentResolver::class, $template);
        $result = $contentResolver->resolve(['data' => $data]);
        return $result !== null ? $result : '';
    }

    protected function getPlainTextContent(array $data = []): string
    {
        $result = '';
        if ($this->plainContentTemplate) {
            $result = $this->processTemplate($this->plainContentTemplate, $data);
        }
        return $result;
    }

    protected function getHtmlContent(array $data = []): string
    {
        if ($this->htmlContentTemplate) {
            return $this->processTemplate($this->htmlContentTemplate, $data);
        }
        return '';
    }

    protected function getSubject(array $data = []): string
    {
        return $this->processTemplate($this->subject, $data);
    }

    protected function renderEmailAddress($email, $name = '', array $data = []): string
    {
        $processedEmail = $this->processTemplate($email, $data);
        $processedName = $name ? $this->processTemplate($name, $data) : $name;
        return parent::renderEmailAddress($processedEmail, $processedName);
    }

    protected function getFrom(array $data = []): string
    {
        return $this->renderEmailAddress($this->sender, $this->senderName, $data);
    }

    protected function getTo(array $data = []): string
    {
        return $this->renderEmailAddress($this->recipients, $this->recipientName, $data);
    }
}
