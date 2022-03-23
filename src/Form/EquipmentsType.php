<?php

namespace App\Form;

use App\Entity\Storages;
use App\Entity\Equipments;
use App\Entity\Affectations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EquipmentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameequipement', TextType::class, [
                'label' => 'Equipement /  Matériel : ', 
                'required'=> true,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('quantityequipment', NumberType::class, [
                'label' => 'Quantité : ', 
                'required'=> false
            ])
            ->add('quantityminiequipment', NumberType::class, [
                'label' => 'Quantité Mini : ', 
                'required'=> false
            ])
            ->add('daterebusequipment',DateType::class, [
                'label' => 'Date de rebus : ',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('loanequipment',DateType::class, [
                'label' => 'Date du prêt : ',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('borrowerequipment', TextType::class, [
                'label' => 'Emprunteur : ', 
                'required'=> false,
                'attr' => [
                    'maxlength' => '250'
                ]
            ])
            ->add('equipementsstorages', EntityType::class,[
                'label' => 'Stockage',
                'required'=> false,
                'class' => Storages::class,
                'choice_label' => 'namestorage',
                'multiple' => False,
                'expanded' => true,
                'query_builder' => function (ServiceEntityRepository $ser) {
                    return $ser->createQueryBuilder('s')
                        ->orderBy('s.namestorage', 'ASC')
                    ;
                },                
            ])
            ->add('equipmentsaffectations', EntityType::class,[
                'label' => 'Affectation',
                'required'=> false,
                'class' => Affectations::class,
                'choice_label' => 'nameaffectation',
                'multiple' => False,
                'expanded' => true,
                'query_builder' => function (ServiceEntityRepository $ser) {
                    return $ser->createQueryBuilder('a')
                        ->orderBy('a.nameaffectation', 'ASC')
                    ;
                },
            ])
            // ->add('equipmentsusers')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipments::class,
        ]);
    }
}
