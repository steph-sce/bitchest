<?php

namespace App\Repository;

use App\Entity\Cotation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cotation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cotation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cotation[]    findAll()
 * @method Cotation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CotationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cotation::class);
    }

    // /**
    //  * @return Cotation[] Returns an array of Cotation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cotation
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
