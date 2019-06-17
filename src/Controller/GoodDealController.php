<?php

namespace App\Controller;

use App\Entity\GoodDeal;
use App\Form\GoodDealType;
use App\Repository\GoodDealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/good/deal")
 */
class GoodDealController extends AbstractController
{
    /**
     * @Route("/", name="good_deal_index", methods={"GET","POST"})
     */
    public function index(GoodDealRepository $goodDealRepository, Request $request): Response
    {
        $goodDeal = $goodDealRepository->findAll()[0];
        $form = $this->createForm(GoodDealType::class, $goodDeal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('good_deal_index', [
                'id' => $goodDeal->getId(),
            ]);
        }


        return $this->render('good_deal/index.html.twig', [
            'good_deals' => $goodDealRepository->findAll(),
            'good_deal' => $goodDeal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="good_deal_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $goodDeal = new GoodDeal();
        $form = $this->createForm(GoodDealType::class, $goodDeal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($goodDeal);
            $entityManager->flush();

            return $this->redirectToRoute('good_deal_index');
        }

        return $this->render('good_deal/new.html.twig', [
            'good_deal' => $goodDeal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="good_deal_show", methods={"GET"})
     */
    public function show(GoodDeal $goodDeal): Response
    {
        return $this->render('good_deal/show.html.twig', [
            'good_deal' => $goodDeal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="good_deal_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GoodDeal $goodDeal): Response
    {
        $form = $this->createForm(GoodDealType::class, $goodDeal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('good_deal_index', [
                'id' => $goodDeal->getId(),
            ]);
        }

        return $this->render('good_deal/edit.html.twig', [
            'good_deal' => $goodDeal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="good_deal_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GoodDeal $goodDeal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$goodDeal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($goodDeal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('good_deal_index');
    }
}
