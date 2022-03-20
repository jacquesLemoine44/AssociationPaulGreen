<?php

namespace App\Repository;

use App\Entity\PhotosActionsMasters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PhotosActionsMasters|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotosActionsMasters|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotosActionsMasters[]    findAll()
 * @method PhotosActionsMasters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotosActionsMastersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotosActionsMasters::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PhotosActionsMasters $entity, bool $flush = true): void
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
    public function remove(PhotosActionsMasters $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
    * @return PhotosActionsMasters[] Returns an array of PhotosActionsMasters objects
    */
        
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('p')
            ->select(['p','titi'])
            ->Join('p.PhotosActions','titi')
            ->orderBy('titi.titleactionsmaster','ASC')  
            ->addorderBy('p.altphotoactionsmaster','ASC')   
        ;
        return $query->getQuery()->getResult();
    }  

    // /**
    //  * @return PhotosActionsMasters[] Returns an array of PhotosActionsMasters objects
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
    public function findOneBySomeField($value): ?PhotosActionsMasters
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
