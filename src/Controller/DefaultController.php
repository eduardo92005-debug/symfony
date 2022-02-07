<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Repository\ProductRepository;
    use App\Entity\Product;
    
    class DefaultController extends AbstractController{
        /**
         * @Route("/", name="default")
         */
        public function index(ProductRepository $repo){
            $products = $repo->findBy([]);
        return $this->render('index.html.twig', [
            'controller_name' => $products,
        ]);
        }
    }
    ?>