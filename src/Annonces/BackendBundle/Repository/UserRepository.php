<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 11/03/2017
 * Time: 15:48
 */

namespace Annonces\BackendBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class UserRepository extends EntityRepository
{

    public function getUsers($page, $nbPerPage){
        $query = $this->createQueryBuilder('u')->getQuery();
        $query ->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);
        return new Paginator($query, true);
    }
} 