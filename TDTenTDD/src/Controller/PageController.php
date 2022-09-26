<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class PageController extends AbstractController
{
    /**
     * @Route("/hello", name="app_hello")
     */
    public function index()
    {
        return $this->render('page/hello.html.twig');
    }

    /**
     * @Route("/auth", name="app_auth")
     */
    public function authentification(){
        return $this->render('page/auth.html.twig');
    }


}
