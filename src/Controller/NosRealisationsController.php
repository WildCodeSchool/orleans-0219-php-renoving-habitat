<?php

namespace App\Controller;

use App\Entity\GoodDeal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosRealisationsController extends AbstractController
{

    /**
     * @Route("/realisations", name="nos_real")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('nos_realisations/index.html.twig');
    }
}
