<?php

namespace App\Form;

use App\Entity\SocialNetworks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialNetworksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('socialNetwork', TextType::class, [
                'label' => 'Réseau social : ',
                'required' => true,
                'attr' => [
                    'maxlength' => '50'
                ]
            ])
            ->add('codeSocialnetwork', TextType::class, [
                'label' => 'Code Logo : ',
                'required' => false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('linkSocialnetwork', TextType::class, [
                'label' => 'Lien : ',
                'required' => false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            // ->add('logoSocialnetwork', TextType::class, ['label' => 'Logo : '])
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
