<?php

namespace App\Repository;

use App\Entity\DocActionsAssos;
use App\Entity\ActionsAssos;
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

     
    public function findOneBySomeField($value): ?DocActionsAssos
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.docactassoid = :val')
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
         FROM App\Entity\doc_actions_assos d
         INNER JOIN App\Entity\actions_assos a
         ON d.docactasso_id = a.id 
         ORDER BY a.titleactionsasso ASC, d.titledocactionsasso ASC
        ");
        return $query->getResult();
    }

    // SELECT doc_actions_assos.*
        // FROM doc_actions_assos 
        // INNER JOIN actions_assos 
        // ON doc_actions_assos.docactasso_id = actions_assos.id 

        // ORDER BY actions_assos.titleactionsasso ASC, doc_actions_assos.titledocactionsasso
        // https://zestedesavoir.com/tutoriels/1713/doctrine-2-a-lassaut-de-lorm-phare-de-php/exploiter-une-base-de-donnees-avec-doctrine-2/optimiser-lutilisation-de-doctrine/
    /**
     * @return DocActionsAssos[] Returns an array of DocActionsAssos objects
     */
    
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('d')
            ->select(['d','a'])
            ->Join('d.docactasso','a')
            ->orderBy('a.titleactionsasso','ASC')  
            ->addorderBy('d.titledocactionsasso','ASC')   
        ;
        return $query->getQuery()->getResult();
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
