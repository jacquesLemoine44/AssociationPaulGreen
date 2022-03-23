<?php

namespace App\Form;

use App\Entity\NewsPhotos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NewsPhotosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photoNewPhoto', TextType::class, [
                'label' => 'Photo : ', 
                'required'=> false,
                'disabled'=>true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('altNewsPhoto', TextType::class, [
                'label' => 'Description Image : ',
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            // ->add('newsPhotosnews')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsPhotos::class,
        ]);
    }
}
