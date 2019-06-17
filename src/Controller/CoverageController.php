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

class CoverageController extends AbstractController
{

    /**
     * @Route("/je_renov/coverage", name="coverage_index")
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('je_renov/coverage.html.twig', [
        ]);
    }
}
