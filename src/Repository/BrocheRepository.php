<?php

namespace App\Repository;

use App\Entity\Broche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Broche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Broche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Broche[]    findAll()
 * @method Broche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrocheRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Broche::class);
    }

    // /**
    //  * @return Broche[] Returns an array of Broche objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Broche
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
