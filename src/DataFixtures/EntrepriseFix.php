<?php


namespace App\DataFixtures;


use App\Entity\Entreprise;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EntrepriseFix extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for($x = 0 ; $x< 30 ; $x++) {
            $e = new Entreprise();
            $e->setDesignation($faker->company);
            $manager->persist($e);
        }
        $manager->flush();
    
}
}