<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProductType;
use PhpParser\Node\Name;
use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProduitController extends AbstractController
{
    #[Route( '/Add',name:'Produit_index')]
    public function AddProduit ()
    {
    $Produit = new Produit ;
            $form = $this->createForm(ProductType::class,$Produit);
                return $this->render('Produit/Add-Produit.html.twig',[
                    'form' => $form->createView()

                ]);
        
    }
}
?>