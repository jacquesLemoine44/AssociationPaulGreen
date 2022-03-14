<?php

namespace App\Repository;

use App\Entity\Fieldtripphotos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fieldtripphotos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fieldtripphotos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fieldtripphotos[]    findAll()
 * @method Fieldtripphotos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FieldtripphotosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fieldtripphotos::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Fieldtripphotos $entity, bool $flush = true): void
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
    public function remove(Fieldtripphotos $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return DocActionsAssos[] Returns an array of DocActionsAssos objects
     */
    
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('f')
            ->select(['f','toto'])
            ->Join('f.fieldstripsorigin','toto')
            ->orderBy('toto.titlefieldtrip','ASC')  
            ->addorderBy('f.altfieldtripphoto','ASC')   
        ;
        return $query->getQuery()->getResult();
    }      

    // /**
    //  * @return Fieldtripphotos[] Returns an array of Fieldtripphotos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fieldtripphotos
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
