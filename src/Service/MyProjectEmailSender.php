<?php

namespace App\Service;

class MyProjectEmailSender
{

    private $mailer;
    private $templating;

    public function __construct($mailer, $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function sendEmail($content)
    {
        $message = (new \Swift_Message('Nouvelle demande de devis'))
            ->setFrom('')
            ->setTo('')
            ->setBody($this->templating->render('monProjet/email/email.html.twig', ['data' => $content]));

        $this->mailer->send($message);
    }
}
