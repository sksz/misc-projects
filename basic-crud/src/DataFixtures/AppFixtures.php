<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $customer = new Product();
            $customer->setName($faker->word);
            $customer->setQuantity($faker->randomNumber(3, false));
            $customer->setMaker($faker->company);
            $manager->persist($customer);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
