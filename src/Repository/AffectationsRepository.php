<?php

namespace App\Repository;

use App\Entity\Affectations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Affectations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affectations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affectations[]    findAll()
 * @method Affectations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffectationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affectations::class);
    }


    /**
    * @return Affectations[] Returns an array of Affectations objects
    */
        
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('a')
            ->select(['a'])
            ->orderBy('a.nameaffectation','ASC')  
        ;
        return $query->getQuery()->getResult();
    } 


    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Affectations $entity, bool $flush = true): void
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
    public function remove(Affectations $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Affectations[] Returns an array of Affectations objects
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
    public function findOneBySomeField($value): ?Affectations
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
