<?php

namespace App\Repository;

use App\Entity\PpSuburb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PpSuburb|null find($id, $lockMode = null, $lockVersion = null)
 * @method PpSuburb|null findOneBy(array $criteria, array $orderBy = null)
 * @method PpSuburb[]    findAll()
 * @method PpSuburb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PpSuburbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PpSuburb::class);
    }

    // /**
    //  * @return PpSuburb[] Returns an array of PpSuburb objects
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
    public function findOneBySomeField($value): ?PpSuburb
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
