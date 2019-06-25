<?php

namespace App\Repository;

use App\Entity\MyProjectPersonal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MyProjectPersonal|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyProjectPersonal|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyProjectPersonal[]    findAll()
 * @method MyProjectPersonal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyProjectPersonalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MyProjectPersonal::class);
    }

    // /**
    //  * @return MyProjectPersonal[] Returns an array of MyProjectPersonal objects
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
    public function findOneBySomeField($value): ?MyProjectPersonal
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
