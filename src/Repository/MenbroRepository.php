<?php

namespace App\Repository;

use App\Entity\Menbro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Menbro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Menbro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Menbro[]    findAll()
 * @method Menbro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenbroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Menbro::class);
    }

    // /**
    //  * @return Menbro[] Returns an array of Menbro objects
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
    public function findOneBySomeField($value): ?Menbro
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
