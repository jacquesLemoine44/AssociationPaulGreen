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

    /**
     * @return DocActionsAssos[] Returns an array of DocActionsAssos objects
     */
    
    public function findByTri2createQueryBuilder()
    {
        $query =$this->createQueryBuilder('d')
           ->innerJoin('d.docactass','a')
           ->orderBy( 'd.titledocactionsasso','ASC' )            
        ;
        // dump($query);
        // var_dump($query);
        // die();
        return $query->getQuery()->getResult();

        //     ->leftJoin('App\Entity\Resultat',
        //     'd',
        //     'WITH',
        //     'c.name = d.name AND c.score < d.score'
        // )
        // ->where( 'd.score IS NULL' )
        // ->orderBy( 'c.name','DESC' );

        // return $this->createQueryBuilder('d')
        //     ->select('d')
        //     // ->from('App\Entity\DocActionsAssos','d')
        //     // ->innerJoin('App\Entity\ActionsAssos','a','WITH','d.docactasso_id = a.id')
        //      ->innerJoin('App\Entity\ActionsAssos','a','WITH','d.docactasso_id = a.id')

        //     // ->leftJoin(d.docactasso_id,)

        //     // ->orderBy('a.titleactionsasso','ASC','d.titledocactionsasso', 'ASC')
        //     ->orderBy('d.titledocactionsasso', 'ASC')
        //     ->getQuery()
        //     ->getResult()
        // ;
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
