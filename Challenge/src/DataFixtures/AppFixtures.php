<?php

namespace App\DataFixtures;

use App\Entity\Ambiance;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i < 91 ; $i++){
            $produit = new Produit();
            $produit->setName(false);
            $produit->setTags(false);
            $produit->setUrl('/Produits/'.$i.'.png');
            $manager->persist($produit);
        }

        for ($i=1; $i < 91 ; $i++){
            $ambiance = new Ambiance();
            $ambiance ->setName(false);
            $ambiance ->setTags(false);
            $ambiance ->setUrl('/Ambiance/'.$i.'.png');
            $manager->persist($ambiance);
        }

        $manager->flush();
    }
}
