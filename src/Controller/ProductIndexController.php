<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductIndexController extends AbstractController
{
    /**
     * @Route("/product/index", name="product_index_index")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product_index/index.html.twig', ['products' => $productRepository->findAll()]);
    }
  
  //  public function index()
    //{
      //  return $this->render('product_index/index.html.twig', [
        //    'controller_name' => 'ProductIndexController',
       // ]);
 //   }
}
