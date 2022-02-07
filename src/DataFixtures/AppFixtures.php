<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i < 5; $i++) {
            $product = new Product();
            $product->setName('meu product '. $i);
            $product->setDescription('minha description '. $i);
            $product->setPrice(mt_rand(2,10));
            $product->setImage('imagem '.mt_rand(0,3) .'.jpg');
            $manager->persist($product);
        }

        $manager->flush();
    }
}
