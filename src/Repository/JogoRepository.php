<?php

namespace App\Repository;

use App\Entity\Jogo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jogo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jogo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jogo[]    findAll()
 * @method Jogo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JogoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jogo::class);
    }

    // /**
    //  * @return Jogo[] Returns an array of Jogo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jogo
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
