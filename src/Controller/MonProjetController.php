<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonProjetController extends AbstractController
{

    /**
     * @Route("/projet", name="index")
     */

    public function index() :Response
    {
        return $this->render('monProjet/index.html.twig');
    }
}