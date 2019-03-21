<?php

namespace App\Repository;

use App\Entity\Clube;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Clube|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clube|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clube[]    findAll()
 * @method Clube[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClubeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Clube::class);
    }

    // /**
    //  * @return Clube[] Returns an array of Clube objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clube
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
