<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use App\Entity\GoodDeal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @return Response
     */

    public function index(): Response
    {
        $good_deals = $this-> getDoctrine()
            ->getRepository(GoodDeal::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'good_deals' => $good_deals,
        ]);
    }
}
