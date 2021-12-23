<?php

namespace App\DataFixtures;

use App\Entity\BookingItem;
use App\Factory\BookingFactory;
use App\Factory\BrandFactory;
use App\Factory\CustomerFactory;
use App\Factory\ProductFactory;
use App\Factory\BookingItemFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BrandFactory::createMany(10);
        ProductFactory::createMany(50, function (){
           return [
               'brand' => BrandFactory::random()
           ];
        });
        CustomerFactory::createMany(50);
        BookingFactory::createMany(50, function (){
            return [
                'customer' => CustomerFactory::random()
            ];
        });
        BookingItemFactory::createMany(50, function (){
            return [
                'product' => ProductFactory::random(),
                'booking' => BookingFactory::random()
            ];
        });



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
