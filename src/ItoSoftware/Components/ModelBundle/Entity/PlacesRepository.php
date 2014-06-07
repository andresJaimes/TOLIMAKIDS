<?php

namespace ItoSoftware\Components\ModelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PlacesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlacesRepository extends EntityRepository
{
    
     public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM ItoModelBundle:Places p ORDER BY p.name ASC'
            )
            ->getResult();
    }
}
