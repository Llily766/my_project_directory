<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController

{
    #[Route( '/' ,'Home.index')]

public function index () ;
{

   
    return $this->render('Home.html.twig');
}
}



