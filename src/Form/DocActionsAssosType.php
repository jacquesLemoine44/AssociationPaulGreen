<?php

namespace App\Form;

use App\Entity\DocActionsAssos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class DocActionsAssosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titledocactionsasso', TextType::class, [
                'label' => 'Titre du Lien : ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('linkdocactionsasso', TextType::class, [
                'label' => 'Lien :',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

             ->add('docactasso', HiddenType::class, [
                     'mapped' => false
                 ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DocActionsAssos::class,
        ]);
    }
}
