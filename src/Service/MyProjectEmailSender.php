<?php

namespace App\Service;

class MyProjectEmailSender
{

    private $mailer;
    private $templating;
    private $renovingEmail;

    public function __construct($mailer, $templating, $renovingEmail)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->renovingEmail = $renovingEmail;
    }

    public function getEmail(): ?string
    {
        return $this->renovingEmail;
    }

    public function sendEmail($content)
    {
        $message = (new \Swift_Message('Nouvelle demande de devis'))
            ->setFrom('putain2ban@gmail.com')
            ->setTo('putain2ban@gmail.com')
            ->setBody($this->templating->render('monProjet/email/email.html.twig', ['data' => $content]));

        $this->mailer->send($message);
    }
}
