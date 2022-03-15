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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class PartnersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('namePartner', TextType::class, ['label' => 'Regroupement : ', 'required'=> true])
            ->add('textPartner', TextareaType::class, ['label' => 'Description : ', 'required'=> false])

            ->add('photoPartner', FileType::class, [
                'label' => 'Photo : ',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                    ])
                ],
            ])

            ->add('logoPartner', FileType::class, [
                'label' => 'Logo : ',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                    ])
                ],
            ])


            ->add('linkPartner', TextType::class, [
                'label' => 'Lien : ',
                'required'=> false
            ])
            
            ->add('partnerGrouping', EntityType::class,[
                'label' => 'Regroupement des Partenaires',
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
