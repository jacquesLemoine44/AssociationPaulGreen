<?php

namespace App\Form;

use App\Entity\Affectations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AffectationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameaffectation', TextType::class, [
                'label' => 'Affectation : ', 
                'required'=> true
            ])
            ->add('descriptionaffectation', TextType::class, [
                'label' => 'Description : ', 
                'required'=> false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Affectations::class,
        ]);
    }
}
