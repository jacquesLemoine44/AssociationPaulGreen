<?php

namespace App\Form;

use App\Entity\PhotosActionsAssos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PhotosActionsAssosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photoactionsasso', TextType::class, [
                'label' => 'Photo : ', 
                'required'=> false,
                'disabled'=>true,
            ])
            ->add('altphotoactionsasso', TextType::class, [
                'label' => 'Description Image : ',
                'required'=> false
                ])
            // ->add('photoactasso')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PhotosActionsAssos::class,
        ]);
    }
}
