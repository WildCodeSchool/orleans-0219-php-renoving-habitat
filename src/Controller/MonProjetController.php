<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use App\Service\MyProjectEmailSender;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MonProjetController extends AbstractController
{

    /**
     * @Route("/projet", name="projet")*
     */

    public function index() :Response
    {
        return $this->render('monProjet/index.html.twig');
    }

    /**
     * @Route("/projet/sendEmail", name="emailSend")
     */

    public function sendEmail(\Swift_Mailer $mailer, \Twig\Environment $templating) :Response
    {
        $info = $_POST;
        $emailSender = new MyProjectEmailSender($mailer, $templating);
        $emailSender->sendEmail($info);

        return $this->render('monProjet/index.html.twig');
    }
}
