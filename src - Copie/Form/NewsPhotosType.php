<?php

namespace App\Form;

use App\Entity\NewsPhotos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsPhotosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photoNewPhoto')
            ->add('altNewsPhoto', TextType::class, ['label' => 'Description Image : ', 'required'=> false])
            ->add('newsPhotosnews')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsPhotos::class,
        ]);
    }
}
