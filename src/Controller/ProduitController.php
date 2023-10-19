<?php

namespace App\Controller;

use App\Form\ProductType;
use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProduitController extends AbstractController
{
    #[Route( '/' ,'Produit_index')]
     public function index () ;
    {
    $Produit = new Produit ;
$form = $this->createForm(ProductType::class,$Produit);
        return $this->render('Produit/add-Produit.html.twig');
        
        'form=>$form=>createView'()
    }
}
?>