<?php

namespace App\Repository;

use App\Entity\Faixa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Faixa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Faixa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Faixa[]    findAll()
 * @method Faixa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaixaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Faixa::class);
    }

    // /**
    //  * @return Faixa[] Returns an array of Faixa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Faixa
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
