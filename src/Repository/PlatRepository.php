<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use DoctrineExtensions\Query\Mysql\Rand;

/**
 * @extends ServiceEntityRepository<Plat>
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }

    public function randomPlats(int $limit = 6): array
    {
        return $this->createQueryBuilder('p')
        ->addSelect('RAND() as HIDDEN rand')
        ->orderBy('rand')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
    }

    public function findAll(): array
    {
        return $this->createQueryBuilder('p')
        ->orderBy('p.categorie')
        ->addOrderBy('p.libelle')
        ->getQuery()
        ->getResult();
    }

    public function parCategorie (int $id): array
    {
        return $this->createQueryBuilder('p')
        ->where('p.categorie = :id')
        ->setParameter('id', $id)
        ->orderBy('p.libelle')
        ->getQuery()
        ->getResult();
    }

//    /**
//     * @return Plat[] Returns an array of Plat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Plat
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
