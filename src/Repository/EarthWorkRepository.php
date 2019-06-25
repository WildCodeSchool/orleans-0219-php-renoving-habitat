<?php

namespace App\Repository;

use App\Entity\EarthWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EarthWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method EarthWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method EarthWork[]    findAll()
 * @method EarthWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EarthWorkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EarthWork::class);
    }

    // /**
    //  * @return EarthWork[] Returns an array of EarthWork objects
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
    public function findOneBySomeField($value): ?EarthWork
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
