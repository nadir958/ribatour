<?php

namespace App\Repository;

use App\Entity\Excursion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Excursion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excursion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excursion[]    findAll()
 * @method Excursion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcursionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excursion::class);
    }
    public function search($nom,$ville)
    {
        return $this->createQueryBuilder('excursion')
            ->andWhere('excursion.nom LIKE :searchnom')
            ->andWhere('excursion.ville LIKE :searchville')
            ->setParameter('searchnom', '%'.$nom.'%')
            ->setParameter('searchville', '%'.$ville.'%')
            ->getQuery()
            ->execute();
    }
    public function searchNom($nom)
    {
        return $this->createQueryBuilder('excursion')
            ->andWhere('excursion.nom LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$nom.'%')
            ->getQuery()
            ->execute();
    }
    public function searchVille($ville)
    {
        return $this->createQueryBuilder('excursion')
            ->andWhere('excursion.ville LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$ville.'%')
            ->getQuery()
            ->execute();
    }

    // /**
    //  * @return Excursion[] Returns an array of Excursion objects
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
    public function findOneBySomeField($value): ?Excursion
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
