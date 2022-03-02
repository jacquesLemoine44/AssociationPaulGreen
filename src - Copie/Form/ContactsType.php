<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('subjetContact', TextType::class, ['label' => 'Sujet : ', 'required'=> true])
            ->add('contentContact')
            ->add('dateContact')
            ->add('nameContact', TextType::class, ['label' => 'Votre Nom : ', 'required'=> true])
            ->add('emailContact', TextType::class, ['label' => 'Mail : ', 'required'=> true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
