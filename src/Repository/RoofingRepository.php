<?php

namespace App\Repository;

use App\Entity\Roofing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Roofing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Roofing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Roofing[]    findAll()
 * @method Roofing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoofingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Roofing::class);
    }

    // /**
    //  * @return Roofing[] Returns an array of Roofing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Roofing
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
