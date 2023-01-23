<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use App\Repository;
use App\Entity\User;

class HomeController extends AbstractController
{
    // Les deux fonctions renvoient désormait un JSON.
    public function homeIndex(PersistenceManagerRegistry $doctrine)
    {        
        $user = $doctrine->getRepository(User::class)->find("1");
        return $this->JSON($user);
    }

    public function homeDeuxIndex()
    {
        $user = array("id" => "2", "name" => "user 2");
        return $this->JSON($user);
    }

}