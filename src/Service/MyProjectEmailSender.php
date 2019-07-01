<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 19/06/19
 * Time: 10:32
 */

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
            ->setFrom('putain2ban@gmail.com')
            ->setTo('putain2ban@gmail.com')
            ->setBody($this->templating->render('monProjet/email/email.html.twig', ['data' => $content]));

        $this->mailer->send($message);
    }
}