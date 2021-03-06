<?php

namespace App\Form;

use App\Entity\PhotosActionsMasters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PhotosActionsMastersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // ->add('PhotosActions')

            ->add('photoactionsmaster', TextType::class, [
                'label' => 'Photo : ', 
                'required'=> false,
                'disabled'=>true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('altphotoactionsmaster', TextType::class, [
                'label' => 'Description Image : ',
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PhotosActionsMasters::class,
        ]);
    }
}
