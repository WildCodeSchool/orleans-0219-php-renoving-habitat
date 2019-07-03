<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EarthworkController extends AbstractController
{

    /**
     * @Route("/je_renov/earthwork", name="earthwork_index")
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('je_renov/earthwork.html.twig', [
        ]);
    }
}