<?php

namespace App\Repository;

use App\Entity\DocActionsAssos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DocActionsAssos|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocActionsAssos|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocActionsAssos[]    findAll()
 * @method DocActionsAssos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocActionsAssosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocActionsAssos::class);
    }

    // /**
    //  * @return DocActionsAssos[] Returns an array of DocActionsAssos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocActionsAssos
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
