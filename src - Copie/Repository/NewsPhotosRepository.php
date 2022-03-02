<?php

namespace App\Repository;

use App\Entity\NewsPhotos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewsPhotos|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewsPhotos|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewsPhotos[]    findAll()
 * @method NewsPhotos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewsPhotosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewsPhotos::class);
    }

    // /**
    //  * @return NewsPhotos[] Returns an array of NewsPhotos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewsPhotos
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
