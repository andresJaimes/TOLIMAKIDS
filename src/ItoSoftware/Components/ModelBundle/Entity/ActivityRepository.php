<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ActivityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActivityRepository extends EntityRepository
{
    
     public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a FROM ItoModelBundle:Activity a ORDER BY a.name ASC'
            )
            ->getResult();
    }
}
