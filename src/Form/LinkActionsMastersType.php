<?php

namespace App\Form;

use App\Entity\LinkActionsMasters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkActionsMastersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('titlelinkactionsmaster', TextType::class, [
                'label' => 'Titre du lien : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('linkactionmaster', TextType::class, [
                'label' => 'Lien : ',
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('LinksActions', TextType::class, [
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
            'data_class' => LinkActionsMasters::class,
        ]);
    }
}
