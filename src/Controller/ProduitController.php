<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProductType;
use PhpParser\Node\Name;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProduitController extends AbstractController
{
#[Route( '/Add',name:'Produit.index')]
public function index () : Response 
    {
        $Produit = new Produit ;
            $form = $this->createForm(ProductType::class,$Produit);
            return $this->render('Produit/Add-Produit.html.twig',[
                    'form' => $form->createView()
                    
                ]);
        
    }
}
?>