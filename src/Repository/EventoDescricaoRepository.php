<?php

namespace App\Repository;

use App\Entity\EventoDescricao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EventoDescricao|null find($id, $lockMode = null, $lockVersion = null)
 * @method EventoDescricao|null findOneBy(array $criteria, array $orderBy = null)
 * @method EventoDescricao[]    findAll()
 * @method EventoDescricao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventoDescricaoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EventoDescricao::class);
    }

    // /**
    //  * @return EventoDescricao[] Returns an array of EventoDescricao objects
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
    public function findOneBySomeField($value): ?EventoDescricao
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
