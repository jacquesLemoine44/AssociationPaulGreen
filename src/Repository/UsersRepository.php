<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof Users) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
    * @return Users[] Returns an array of Users objects
    */
    
    public function findByTriUsers()
    {
        return $this->createQueryBuilder('u')
            ->addorderBy('u.nameUser', 'ASC')
            ->addorderBy('u.firstNameUser', 'ASC')
            ->addorderBy('u.email', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }


// SELECT users.name_user, users.first_name_user, users.email, functions.*
// FROM users INNER JOIN (functions RIGHT JOIN users_functions ON functions.id = users_functions.functions_id) ON users.id = users_functions.users_id
// ORDER BY functions.level_function, users.name_user, users.first_name_user




// SELECT users.*, function.* FROM users 
// INNER JOIN users_functions ON users.id=users_functions.users_id
// INNER JOIN functions ON users_functions.functions_id=functions.id
// ORDER BY functions.level_function, users.name_user, users.first_name_user

public function findOffice()
    {
            $entityManager = $this->getEntityManager();
            $query = $entityManager->createQuery(
                    'SELECT u, f
                     FROM App\Entity\Users u
                     INNER JOIN u.functionUser f
                     ORDER BY f.levelFunction, u.nameUser, u.firstNameUser'
            );

            return $query->getResult();
}    




    // // src/AppBundle/Entity/ProductRepository.php
    // //...
    //   public function findOneByIdJoinedToCategory(int $productId): ?Product
    //     {
    //         $entityManager = $this->getEntityManager();
    
    //         $query = $entityManager->createQuery(
    //             'SELECT p, c
    //             FROM App\Entity\Product p
    //             INNER JOIN p.category c
    //             WHERE p.id = :id'
    //         )->setParameter('id', $productId);
    
    //         return $query->getOneOrNullResult();
    //     }


    // /**
    //  * @return Users[] Returns an array of Users objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Users
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
