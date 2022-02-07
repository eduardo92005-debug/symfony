<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'products')]
    public function index(ProductRepository $repo): Response
    {

        $products = $repo->findBy([]);
        return $this->render('index.html.twig', [
            'controller_name' => $products,
        ]);
    }

}
