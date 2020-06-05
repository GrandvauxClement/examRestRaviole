<?php

namespace App\Repository;

use App\Entity\Ravioles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ravioles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ravioles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ravioles[]    findAll()
 * @method Ravioles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaviolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ravioles::class);
    }

    // /**
    //  * @return Ravioles[] Returns an array of Ravioles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ravioles
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
