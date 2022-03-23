<?php

namespace App\Form;

use App\Entity\LinkActionsAssos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkActionsAssosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titlelinkactionsasso', TextType::class, [
                'label' => 'Titre du lien : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('linkactionsasso', TextType::class, [
                'label' => 'Lien : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('linkactasso', TextType::class, [
                'label' => 'Lien : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LinkActionsAssos::class,
        ]);
    }
}
