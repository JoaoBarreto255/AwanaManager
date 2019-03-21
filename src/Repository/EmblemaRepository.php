<?php

namespace App\Repository;

use App\Entity\Emblema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Emblema|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emblema|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emblema[]    findAll()
 * @method Emblema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmblemaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Emblema::class);
    }

    // /**
    //  * @return Emblema[] Returns an array of Emblema objects
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
    public function findOneBySomeField($value): ?Emblema
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
