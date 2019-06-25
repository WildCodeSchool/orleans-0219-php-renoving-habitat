<?php

namespace App\Controller;

use App\Service\MyProjectEmailSender;
use App\Form\MyProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MyProjectController extends AbstractController
{

    /**
     * @Route("/projet", name="projet")*
     */

    public function index(Request $request) :Response
    {
        $form = $this->createForm(
            MyProjectType::class
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($form->getData());
            die;
        }

        return $this->render('monProjet/index.html.twig', ['form' => $form->createView()]);
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
