<?php

namespace App\Form;

use App\Entity\Storages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class StoragesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('namestorage', TextType::class, [
                'label' => 'Stockage : ', 
                'required'=> true
            ])
            ->add('descriptionstorage', TextType::class, [
                'label' => 'Description : ', 
                'required'=> false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Storages::class,
        ]);
    }
}
