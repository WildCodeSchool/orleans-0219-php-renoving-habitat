<?php

// src/Controller/MeetupController.php
namespace App\Controller;

use App\Entity\SportMeetup;
use App\Forms\SportMeetupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
// ...

class MeetupController extends AbstractController
{
    /**
     * @Route("/projet3", name="projet3")
     */

    public function create(Request $request)
    {
        $meetup = new SportMeetup();
        $form = $this->createForm(SportMeetupType::class, $meetup);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // ... save the meetup, redirect etc.
        }

        return $this->render(
            'meetup/create.html.twig',
            ['form' => $form->createView()]
        );
    }

    // ...
}