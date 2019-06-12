<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use App\Entity\MainWorkCategories;
use App\Entity\FormCouverture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;

class MonProjetController extends AbstractController
{

    /**
     * @Route("/projet", name="projet")
     */

    public function index(Request $request) :Response
    {
        // creates a task and gives it some dummy data for this example
        $task = new MainWorkCategories();
        $form = $this->createFormBuilder($task)
            ->add('Couverture', CheckboxType::class, ['label' => 'Couverture', 'required' => ''])
            ->add('Isolation', CheckboxType::class, ['label' => 'Isolation', 'required' => ''])
            ->add('Interieur', CheckboxType::class, ['label' => 'Interieur', 'required' => ''])
            ->add('Ravalement', CheckboxType::class, ['label' => 'Ravalement', 'required' => ''])
            ->add('Menuiserie', CheckboxType::class, ['label' => 'Menuiserie', 'required' => ''])
            ->add('Terrassement', CheckboxType::class, ['label' => 'Terrassement', 'required' => ''])
            ->add('save', SubmitType::class, ['label' => 'Filter'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            $selectedForms = [];
            foreach ($task as $key => $val) {
                $subFormClass = new FormCouverture();
                if ($key === 'Couverture' && $val === true) {
                    $subForm = $this->createFormBuilder($subFormClass)
                        ->add('TuileCassee', CheckboxType::class, ['label' => 'TuileCassee', 'required' => ''])
                        ->add('FuiteDeau', CheckboxType::class, ['label' => 'FuiteDeau', 'required' => ''])
                        ->add('MousseLichenEct', CheckboxType::class, ['label' => 'Mousse, lichen, algue ou champignon ?', 'required' => ''])
                        ->add('DernierTraitement', CheckboxType::class, ['label' => 'Ravalement', 'required' => ''])
                        ->getForm();

                    $subForm->handleRequest($request);
                    $selectedForms[] = $subForm;
                }
            }

            var_dump($task);
            if(count($selectedForms)>0){
            return $this->render('monProjet/index.html.twig', [
                'form' => $selectedForms[0]->createView(),
            ]);
            }
        }

        return $this->render('monProjet/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
