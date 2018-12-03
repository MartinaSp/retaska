<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductDetailController extends AbstractController
{
    /**
     * @Route("/product/detail", name="product_detail")
     */
    public function index(ProductRepository $productRepository): Response
    {
    return $this->render('product_detail/index.html.twig', ['products' => $productRepository->findAll()]);
    }
    
    // public function index()
    // {
    //    return $this->render('product_detail/index.html.twig', [
    //       'controller_name' => 'ProductDetailController',
    //    ]);
    // }
}
