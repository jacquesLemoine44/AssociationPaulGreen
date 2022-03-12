<?php

namespace App\Form;

use App\Entity\Functions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FunctionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mission', TextType::class, [
                'label' => 'Fonction : ',
                'required'=> true
            ])
            ->add('descriptionFunction', TextareaType::class, [
                'label' => 'Description : ',
                'required'   => false,
                'empty_data' => 'Contenu vide',
            ])
            // ->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Functions::class,
        ]);
    }
}
