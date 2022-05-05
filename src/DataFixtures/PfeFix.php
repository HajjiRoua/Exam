<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class PfeFix extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create();
        for($i = 0 ; $i< 100 ; $i++) {
            $repo = $manager->getRepository(\App\Entity\Entreprise::class);
            $random = rand(201,249);
            $entreprise =$repo->findOneBy(['id'=>"$random"], []);
            $pfe = new \App\Entity\PFE();

            $pfe->setStudent($faker->name);
            $pfe->setTitre("PFE" . $i);
            $pfe->setEntreprise($entreprise);
            $manager->persist($pfe);
        }
        $manager->flush();
    }
}
