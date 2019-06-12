<?php

namespace App\Controller;

use App\Entity\Recruitment;
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
    public function show(Request $request): Response
    {
        $recruitment = new Recruitment();
        $form = $this->createForm(RecruitmentType::class, $recruitment);
        $form->handleRequest($request);

        return $this->render('recruitment/show.html.twig', [
            'recruitment' => $recruitment,
            'form' => $form->createView()
        ]);
    }

}
