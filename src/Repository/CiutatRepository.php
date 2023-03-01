<?php

namespace App\Repository;

use App\Entity\Ciutat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ciutat>
 *
 * @method Ciutat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ciutat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ciutat[]    findAll()
 * @method Ciutat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CiutatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ciutat::class);
    }

    public function save(Ciutat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Ciutat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findByName($nom): array
    {
        $qb = $this->createQueryBuilder('c')
        ->andWhere('c.nom LIKE :nom')
        ->setParameter('nom', '%' . $nom . '%')
        ->getQuery();
        return $qb->execute();
    }


}