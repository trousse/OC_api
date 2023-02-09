<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProductFixtures extends Fixture
{
    public const USER_REF = 'product_';

    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    private function getProducts()
    {
        return [
            [
                "model" => "Iphone 10",
                "brand" => "Apple",
            ],
            [
                "model" => "Iphone 11",
                "brand" => "Apple",
            ],
            [
                "model" => "Galaxy S20",
                "brand" => "Samsung",
            ],
            [
                "model" => "OnePlus 8",
                "brand" => "OnePlus",
            ],
            [
                "model" => "Moto G Power",
                "brand" => "Motorola",
            ],
            [
                "model" => "Google Pixel 4",
                "brand" => "Google",
            ],
            [
                "model" => "LG V60 ThinQ",
                "brand" => "LG",
            ],
            [
                "model" => "Nokia 9 PureView",
                "brand" => "Nokia",
            ],
            [
                "model" => "Sony Xperia 1 II",
                "brand" => "Sony",
            ],
            [
                "model" => "Razer Phone 2",
                "brand" => "Razer",
            ]
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $products = $this->getProducts();
        foreach ($products as $product){
            $newProduct = new Product();
            $newProduct->setModel($product['model']);
            $newProduct->setBrand($product['brand']);
            $manager->persist($newProduct);
        }
        $manager->flush();
    }
}