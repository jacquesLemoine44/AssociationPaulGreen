<?php

namespace App\Repository;

use App\Entity\ActionsMasters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ActionsMasters|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActionsMasters|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActionsMasters[]    findAll()
 * @method ActionsMasters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActionsMastersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActionsMasters::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ActionsMasters $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ActionsMasters $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    /**
     * @return ActionsMasters[] Returns an array of ActionsMasters objects
     */
    
    public function LastFiveActionsMasters()
    {
        // $User=$this->getUser()->getId();

        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;
    }


    // /**
    //  * @return ActionsMasters[] Returns an array of ActionsMasters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActionsMasters
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
