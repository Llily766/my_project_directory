<?php

namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    #[Route( '/' ,'Home_index')]
     public function index () 
{

        return $this->render('Home.html.twig');
}
    }
?>


