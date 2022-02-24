<?php

namespace App\Form;

use App\Entity\Partners;
use App\Entity\GroupingPartners;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PartnersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('namePartner', TextType::class, ['label' => 'Regroupement : ', 'required'=> false])
            ->add('textPartner', TextareaType::class, ['label' => 'Description : ', 'required'=> false])
            ->add('photoPartner')
            ->add('logoPartner')
            ->add('linkPartner', TextType::class, ['label' => 'Lien : ', 'required'=> false])
            ->add('partnerGrouping')
            ->add('partnerGrouping', EntityType::class,[
                'class' => GroupingPartners::class,
                'choice_label' => 'titleGroupingPartner',
                'multiple' => False,
                'expanded' => true,
                ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partners::class,
        ]);
    }
}
