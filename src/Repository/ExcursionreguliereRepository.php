<?php

namespace App\Repository;

use App\Entity\Excursionreguliere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Excursionreguliere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excursionreguliere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excursionreguliere[]    findAll()
 * @method Excursionreguliere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcursionreguliereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excursionreguliere::class);
    }

    // /**
    //  * @return Excursionreguliere[] Returns an array of Excursionreguliere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Excursionreguliere
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
