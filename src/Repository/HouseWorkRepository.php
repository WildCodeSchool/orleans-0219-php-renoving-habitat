<?php

namespace App\Repository;

use App\Entity\HouseWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method HouseWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method HouseWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method HouseWork[]    findAll()
 * @method HouseWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HouseWorkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, HouseWork::class);
    }

    // /**
    //  * @return HouseWork[] Returns an array of HouseWork objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HouseWork
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
