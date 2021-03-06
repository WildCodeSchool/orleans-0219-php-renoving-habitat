<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CleaningController extends AbstractController
{

    /**
     * @Route("/je-renove/ravalement", name="cleaning_index")
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('je_renov/cleaning.html.twig', [
        ]);
    }
}
