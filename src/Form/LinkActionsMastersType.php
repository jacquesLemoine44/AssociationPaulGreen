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
            ->add('titlelinkactionsmaster')
            ->add('linkactionmaster')
            ->add('LinksActions')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LinkActionsMasters::class,
        ]);
    }
}
