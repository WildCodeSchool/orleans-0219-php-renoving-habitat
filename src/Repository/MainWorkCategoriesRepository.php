<?php

namespace App\Repository;

use App\Entity\MainWorkCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MainWorkCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainWorkCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainWorkCategories[]    findAll()
 * @method MainWorkCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainWorkCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MainWorkCategories::class);
    }

    // /**
    //  * @return MainWorkCategories[] Returns an array of MainWorkCategories objects
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
    public function findOneBySomeField($value): ?MainWorkCategories
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
