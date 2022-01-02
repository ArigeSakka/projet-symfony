<?php

namespace App\Repository;

use App\Entity\OrderFactory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderFactory|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderFactory|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderFactory[]    findAll()
 * @method OrderFactory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderFactoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderFactory::class);
    }

    // /**
    //  * @return OrderFactory[] Returns an array of OrderFactory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderFactory
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
