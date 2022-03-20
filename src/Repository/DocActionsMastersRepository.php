<?php

namespace App\Repository;

use App\Entity\DocActionsMasters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DocActionsMasters|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocActionsMasters|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocActionsMasters[]    findAll()
 * @method DocActionsMasters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocActionsMastersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocActionsMasters::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(DocActionsMasters $entity, bool $flush = true): void
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
    public function remove(DocActionsMasters $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    public function findOneBySomeField($value): ?DocActionsMasters
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.DocActassoid = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->getQuery()
            ->getOneOrNullResult()
        ;

    }

    /**
     * @return DocActionsAssos[] Returns an array of DocActionsAssos objects
     */
    public function FindTri1createBuider(){
        $query = $this->getEntityManager()->createQuery("
         SELECT d
         FROM App\Entity\doc_actions_masters d
         INNER JOIN App\Entity\actions_masters a
         ON d.DocActions_id = a.id 
         ORDER BY a.titleactionsmaster ASC, d.titledocactionsmaster ASC
        ");
        return $query->getResult();
    }  

    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('d')
            ->select(['d','a'])
            ->Join('d.DocActions','a')
            ->orderBy('a.titleactionsmaster','ASC')  
            ->addorderBy('d.titledocactionsmaster','ASC')   
        ;
        return $query->getQuery()->getResult();
    }

    // /**
    //  * @return DocActionsMasters[] Returns an array of DocActionsMasters objects
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
    public function findOneBySomeField($value): ?DocActionsMasters
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
