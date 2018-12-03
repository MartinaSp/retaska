<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductIndexController extends AbstractController
{
    /**
     * @Route("/product/index", name="product_index_index")
     */
    public function index()
    {
        return $this->render('product_index/index.html.twig', [
            'controller_name' => 'ProductIndexController',
        ]);
    }
}
