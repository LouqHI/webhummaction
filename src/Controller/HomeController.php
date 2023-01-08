<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    public function homeIndex()
    {
        // replace this example code with whatever you need
        return $this->render("views\homeIndex.html.twig", array("home" => "1"));
    }

    public function homeDeuxIndex()
    {
        // replace this example code with whatever you need
        $user = array("id" => "1", "name" => "me");
        return $this->render("views\homeIndex.html.twig", array("home" => "2", "user" => $user));
    }



}
