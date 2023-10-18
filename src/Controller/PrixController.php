<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PrixController extends AbstractController

    {
    #[Route( '/' ,'Prix_index')]
    
    public function index () 
{

   
    return $this->render('Prix.html.twig');

}
    }

?>