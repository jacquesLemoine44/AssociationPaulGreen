<?php

namespace App\Form;

use App\Entity\ActionsAssos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActionsAssosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleactionsasso', TextType::class, ['label' => 'titre : ', 'required'=> true])
            ->add('pictureactionsasso')
            ->add('textactionsasso')
            // ->add('linkactionsasso')
            ->add('startactionsasso')
            ->add('endactionsasso')
            ->add('titlelinkactionsasso', TextType::class, ['label' => 'titre : ', 'required'=> false])
            // ->add('actionsassosuser')
            // ->add('actionsassostheme')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActionsAssos::class,
        ]);
    }
}
