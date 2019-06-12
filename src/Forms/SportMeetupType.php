<?php

// src/Form/Type/SportMeetupType.php
namespace App\Forms;

use App\Entity\SportMeetup;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
// ...

class SportMeetupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sport', EntityType::class, [
                'class'       => 'App\Entity\SportMeetup',
                'placeholder' => '',
            ]);
        ;

        $formModifier = function (FormInterface $form, SportMeetup $sport = null) {
            //$positions = null === $sport ? [] : $sport->getAvailablePositions();
            $positions = [];
            /*$form->add('position', EntityType::class, [
                'class' => 'App\Entity\Position',
                'placeholder' => '',
                'choices' => $positions,
            ]);*/
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();

                $formModifier($event->getForm(), $data->getSportType());
            }
        );

        $builder->get('sport')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $sport = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $sport);
            }
        );
    }

    // ...
}