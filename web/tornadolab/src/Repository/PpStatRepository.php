<?php

namespace App\Repository;

use App\Entity\PpStat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PpStat|null find($id, $lockMode = null, $lockVersion = null)
 * @method PpStat|null findOneBy(array $criteria, array $orderBy = null)
 * @method PpStat[]    findAll()
 * @method PpStat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PpStatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PpStat::class);
    }

    // /**
    //  * @return PpStat[] Returns an array of PpStat objects
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
    public function findOneBySomeField($value): ?PpStat
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
