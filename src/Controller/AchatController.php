<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AchatController extends AbstractController

{
    #[Route( '/' ,'Achat.index')]
    
public function index () ;
{

   
    return $this->render('Achat.html.twig');

}
}

