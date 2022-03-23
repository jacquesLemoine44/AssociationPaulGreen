<?php

namespace App\Form;

use App\Entity\DocActionsMasters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocActionsMastersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // ->add('DocActions')

            ->add('titledocactionsmaster', TextType::class, [
                'label' => 'Titre du Lien : ',
                'attr' => [
                    'class' => 'form-control',
                    'maxlength' => '250'
                ]
            ])
            ->add('linkdocactionsmaster', TextType::class, [
                'label' => 'Lien :',
                'attr' => [
                    'class' => 'form-control',
                    'maxlength' => '250'
                    ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DocActionsMasters::class,
        ]);
    }
}
