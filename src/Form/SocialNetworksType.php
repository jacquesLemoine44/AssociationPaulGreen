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
            ])
            ->add('codeSocialnetwork', TextType::class, [
                'label' => 'Code Logo : ',
                'required' => false,
            ])
            ->add('linkSocialnetwork', TextType::class, [
                'label' => 'Lien : ',
                'required' => false,
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
