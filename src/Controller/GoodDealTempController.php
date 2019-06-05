<?php

namespace App\Controller;

use App\Repository\GoodDealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GoodDealTempController extends AbstractController
{
    /**
     * @Route("/good/deal/temp", name="good_deal_temp", methods={"get"})
     */
    public function index(GoodDealRepository $goodDealRepository)
    {
        return $this->render('good_deal_temp/index.html.twig', [
            'good_deal' => $goodDealRepository->findAll()

        ]);
    }
}
