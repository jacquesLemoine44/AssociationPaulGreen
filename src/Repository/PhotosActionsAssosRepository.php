<?php

namespace App\Repository;

use App\Entity\PhotosActionsAssos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PhotosActionsAssos|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotosActionsAssos|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotosActionsAssos[]    findAll()
 * @method PhotosActionsAssos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotosActionsAssosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotosActionsAssos::class);
    }


    /**
    * @return PhotosActionsAssos[] Returns an array of PhotosActionsAssos objects
    */
        
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('p')
            ->select(['p','titi'])
            ->Join('p.photoactasso','titi')
            ->orderBy('titi.titleactionsasso','ASC')  
            ->addorderBy('p.altphotoactionsasso','ASC')   
        ;
        return $query->getQuery()->getResult();
    }  


    // /**
    //  * @return PhotosActionsAssos[] Returns an array of PhotosActionsAssos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotosActionsAssos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
