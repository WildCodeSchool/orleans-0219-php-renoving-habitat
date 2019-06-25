<?php

namespace App\Repository;

use App\Entity\Facade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Facade|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facade|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facade[]    findAll()
 * @method Facade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacadeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Facade::class);
    }

    // /**
    //  * @return Facade[] Returns an array of Facade objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Facade
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
