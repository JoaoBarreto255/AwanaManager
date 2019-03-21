<?php

namespace App\Repository;

use App\Entity\Premiacao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Premiacoes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Premiacoes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Premiacoes[]    findAll()
 * @method Premiacoes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiacaoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Premiacao::class);
    }

    // /**
    //  * @return Premiacoes[] Returns an array of Premiacoes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Premiacoes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
