<?php

namespace App\Repository;

use App\Entity\UberEat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UberEat|null find($id, $lockMode = null, $lockVersion = null)
 * @method UberEat|null findOneBy(array $criteria, array $orderBy = null)
 * @method UberEat[]    findAll()
 * @method UberEat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UberEatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UberEat::class);
    }

    // /**
    //  * @return UberEat[] Returns an array of UberEat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UberEat
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
