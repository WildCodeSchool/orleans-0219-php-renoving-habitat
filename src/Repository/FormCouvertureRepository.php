<?php

namespace App\Repository;

use App\Entity\FormCouverture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormCouverture|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormCouverture|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormCouverture[]    findAll()
 * @method FormCouverture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormCouvertureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormCouverture::class);
    }

    // /**
    //  * @return FormCouverture[] Returns an array of FormCouverture objects
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
    public function findOneBySomeField($value): ?FormCouverture
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
