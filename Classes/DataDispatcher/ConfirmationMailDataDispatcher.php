<?php

namespace Mediatis\FormrelayConfirmationMail\DataDispatcher;

use FormRelay\Mail\DataDispatcher\AbstractMailDataDispatcher;

class ConfirmationMailDataDispatcher extends AbstractMailDataDispatcher
{

    /** @var string */
    protected $plainBody;

    /** @var string */
    protected $htmlBody;

    /**
     * @param $plainBody
     * @return void
     */
    public function setPlainBody($plainBody) {
        $this->plainBody = $plainBody;
    }

    /**
     * @param $htmlBody
     * @return void
     */
    public function setHtmlBody($htmlBody) {
        $this->htmlBody = $htmlBody;
    }

    /**
     * @param array $data
     * @return string
     */
    protected function getPlainBody(array $data): string
    {
        return $this->plainBody;
    }

    /**
     * @param array $data
     * @return string
     */
    protected function getHtmlBody(array $data): string
    {
        return $this->htmlBody;
    }
}
