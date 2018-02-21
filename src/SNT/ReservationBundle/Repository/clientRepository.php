<?php

namespace SNT\ReservationBundle\Repository;

/**
 * clientRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clientRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBienByLogin($login): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT C
            FROM SNT\ReservationBundle\Entity\Client C
            WHERE B.login = :login'
        )->setParameters(array('login' => $login));

        return $query->execute();
    }
}
