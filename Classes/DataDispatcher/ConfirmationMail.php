<?php
namespace Mediatis\FormrelayConfirmationMail\DataDispatcher;

/***************************************************************
*  Copyright notice
*
*  (c) 2016 Michael Vöhringer (Mediatis AG) <voehringer@mediatis.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class ConfirmationMail extends \Mediatis\FormrelayMail\DataDispatcher\Mail
{
    protected $recipientName;
    protected $senderName;
    protected $plainContentTemplate;
    protected $htmlContentTemplate;

    public function __construct($recipients, $sender, $subject, $plainContentTemplate, $htmlContentTemplate, $recipientName, $senderName)
    {
        parent::__construct($recipients, $sender, $subject);
        $this->recipientName = $recipientName;
        $this->senderName = $senderName;
        $this->plainContentTemplate = $plainContentTemplate;
        $this->htmlContentTemplate = $htmlContentTemplate;
    }

    protected function processTemplate($template, &$data)
    {
        $result = $template;
        foreach ($data as $field => $value) {
            $placeholder = '{' . $field . '}';
            $result = str_replace($placeholder, $value, $result);
        }
        return $result;
    }

    protected function getPlainTextContent($data)
    {
        if ($this->plainContentTemplate) {
            return $this->processTemplate($this->plainContentTemplate, $data);
        }
        return false;
    }

    protected function getHtmlContent($data)
    {
        if ($this->htmlContentTemplate) {
            return $this->processTemplate($this->htmlContentTemplate, $data);
        }
        return false;
    }

    protected function getSubject($data = false)
    {
        return $this->processTemplate($this->subject, $data);
    }

    protected function renderEmailAddress($email, $name = '', $data = array())
    {
        $processedEmail = $this->processTemplate($email, $data);
        $processedName = $name ? $this->processTemplate($name, $data) : $name;
        return parent::renderEmailAddress($processedEmail, $processedName);
    }

    protected function getFrom($data = false)
    {
        return $this->renderEmailAddress($this->sender, $this->senderName, $data);
    }

    protected function getTo($data = false)
    {
        return $this->renderEmailAddress($this->recipients, $this->recipientName, $data);
    }
}
