<?php

namespace App\Form;

use App\Entity\SocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialNetworksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('socialNetwork', TextType::class, ['Réseau' => 'Votre Nom : '])
            ->add('logoSocialnetwork')
            ->add('codeSocialnetwork')
            ->add('linkSocialnetwork')
            // ->add('params')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SocialNetworks::class,
        ]);
    }
}
