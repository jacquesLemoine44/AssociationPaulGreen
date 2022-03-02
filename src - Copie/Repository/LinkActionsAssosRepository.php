<?php

namespace App\Repository;

use App\Entity\LinkActionsAssos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LinkActionsAssos|null find($id, $lockMode = null, $lockVersion = null)
 * @method LinkActionsAssos|null findOneBy(array $criteria, array $orderBy = null)
 * @method LinkActionsAssos[]    findAll()
 * @method LinkActionsAssos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinkActionsAssosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LinkActionsAssos::class);
    }

    // /**
    //  * @return LinkActionsAssos[] Returns an array of LinkActionsAssos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LinkActionsAssos
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
