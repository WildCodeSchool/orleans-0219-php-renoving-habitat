<?php

namespace App\Controller;

use App\Form\RecruitmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recruitment")
 */
class RecruitmentController extends AbstractController
{

    /**
     * @Route("/", name="recruitment", methods={"GET","POST"})
     */
    public function show(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(RecruitmentType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $message = (new \Swift_Message('Nouvelle demande de recruitment !'))
                ->setFrom($this->getParameter('mailer_from'))
                ->setTo($this->getParameter('mailer_from'))
                ->setBody($this->renderView('recruitment/email.html.twig', ['data' => $data]));
            $mailer->send($message);

            $this->addFlash(
                'success-message',
                'Votre message a bien été envoyé. Nous vous contacterons bientot, merci.'
            );
            return $this->redirectToRoute('recruitment');
        }

        return $this->render('recruitment/show.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
