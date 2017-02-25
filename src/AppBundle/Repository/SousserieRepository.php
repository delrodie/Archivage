<?php

namespace AppBundle\Repository;

/**
 * SousserieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SousserieRepository extends \Doctrine\ORM\EntityRepository
{
  /**
     * Recherche des rayonnages actifs
     *
     * Author: Delrodie AMOIKON
     * Date: 21/02/2017
     * Since: v1.0
     */
     public function getSousserie()
     {
         $em = $this->getEntityManager();
         $qb = $em->createQuery('
             SELECT s
             FROM AppBundle:Sousserie s
             WHERE s.statut = :stat
             ORDER BY s.libelle ASC
         ')
           ->setParameter('stat', 1)
         ;
         try {
             $result = $qb->getResult();

             return $result;

         } catch (NoResultException $e) {
             return $e;
         }
     }
}