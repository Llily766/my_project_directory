<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AchatController extends AbstractController
{
    #[Route( '/' ,'Achat_index')]
    public function index () 
    {
        return $this->render('Achat.html.twig');

    }
}
?>
