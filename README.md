# Introduction

EXT:formrelay_confirmation_mail is providing a destination for EXT:formrelay, which handles form submissions for various endpoints.

It is dispatching the form data as email. The content of the email as well as the meta information (sender email, receiver email, subject,...) are defined by templates which can contain form data as well as logic on the form data.

# Setup

All basic settings, explained in EXT:formrelay, (including the overwrite mechanics) apply to this extension as well.  

## plugin.tx_formrelay_confirmation_mail.settings.enabled

Default: `0`.

Set to `1` to enable the extension.

## plugin.tx_formrelay_confirmation_mail.settings.recipientName

Default: `{first_name} {last_name}`.

Set the displayed name of the recipient.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.recipientEmail

Default: `{email}`.

Set the email address of the recipient.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.senderName

Default: `User Xyz`.

Set the displayed name of the sender.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.senderEmail

Default: `user@domain.com`.

Set the email address of the sender.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.subject 

Default: `Confirmation Mail`.

Set the subject of the email.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.includeAttachmentsInMail

Default: `0`.

Set to `1` if uploaded files shall be attached to the email.  
In any case the uploaded files will be linked within the email (as part of the form data).

## plugin.tx_formrelay_confirmation_mail.settings.plainContent

Default: `Hello {first_name} {last_name}! Your request has arrived and will be handled shortly.`.

Set the plain content of the email. Leave empty if you want to send HTML content only.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.

## plugin.tx_formrelay_confirmation_mail.settings.htmlContent

Default: ``.

Set the HTML content of the email. Leave empty if you want to send plain content only.  
This setting is input for the ContentResolver, described and implemented in EXT:formrelay.
