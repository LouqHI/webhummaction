<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    // Les deux fonctions renvoient désormait un JSON.
    public function homeIndex()
    {   
        $user = array("id" => "1", "name" => "user 1");
        return $this->JSONResponse($user);
    }

    public function homeDeuxIndex()
    {
        $user = array("id" => "2", "name" => "user 2");
        return $this->JSONResponse($user);
    }

    //Fonction renvoyant le twig contenant le point d'entrée Vue
    public function app(): Response
    {
      return $this->render('base.html.twig');
    }

}
