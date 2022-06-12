<?php

namespace App\Repository;

use App\Entity\PRODUCT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRODUCT>
 *
 * @method PRODUCT|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRODUCT|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRODUCT[]    findAll()
 * @method PRODUCT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRODUCTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRODUCT::class);
    }

    public function add(PRODUCT $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PRODUCT $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return PRODUCT[] Returns an array of PRODUCT objects
     */
    public function findByCategorie(string $category): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
          'SELECT * FROM App\Entity\PRODUCT WHERE category_product = category'
          )->setParameter('category',$category);
          return $query->getResult();
    }

   /**
    * @return PRODUCT[] Returns an array of PRODUCT objects
    */
    public function findOneByType(string $type): array
    {
      $entityManager = $this->getEntityManager();

      $query = $entityManager->createQuery(
        'SELECT * FROM App\Entity\PRODUCT WHERE type_product = type'
        )->setParameter('type',$type);
        return $query->getResult();
    }
}
