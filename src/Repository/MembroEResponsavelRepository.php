<?php

namespace App\Repository;

use App\Entity\MembroEResponsavel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MembroEResponsavel|null find($id, $lockMode = null, $lockVersion = null)
 * @method MembroEResponsavel|null findOneBy(array $criteria, array $orderBy = null)
 * @method MembroEResponsavel[]    findAll()
 * @method MembroEResponsavel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MembroEResponsavelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MembroEResponsavel::class);
    }

    // /**
    //  * @return MembroEResponsavel[] Returns an array of MembroEResponsavel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MembroEResponsavel
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
