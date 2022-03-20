<?php

namespace App\Repository;

use App\Entity\GroupingPartners;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupingPartners|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupingPartners|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupingPartners[]    findAll()
 * @method GroupingPartners[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupingPartnersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupingPartners::class);
    }

    /**
    * @return GroupingPartners[] Returns an array of GroupingPartners objects
    */
        
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('g')
            ->select(['g'])
            ->orderBy('g.titleGroupingPartner','ASC')    
        ;
        return $query->getQuery()->getResult();
    } 
    // /**
    //  * @return GroupingPartners[] Returns an array of GroupingPartners objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupingPartners
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
