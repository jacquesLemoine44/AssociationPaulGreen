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
            ->add('titledocactionsmaster')
            ->add('linkdocactionsmaster')
            ->add('DocActions')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DocActionsMasters::class,
        ]);
    }
}
