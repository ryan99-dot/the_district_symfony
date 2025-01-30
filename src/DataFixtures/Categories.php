<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Categories extends Fixture
{
    public const CATEGORIE2_REFERENCE = "categorie2";
    public const CATEGORIE3_REFERENCE = "categorie3";
    public const CATEGORIE4_REFERENCE = "categorie4";
    public const CATEGORIE5_REFERENCE = "categorie5";
    public const CATEGORIE6_REFERENCE = "categorie6";
    public const CATEGORIE7_REFERENCE = "categorie7";
    public const CATEGORIE8_REFERENCE = "categorie8";

    public function load(ObjectManager $manager): void
    {
        $categorie1 = new Categorie();
        $categorie1 -> setLibelle("Asiatique");
        $categorie1 -> setImage("asian_food_cat.jpg");
        $categorie1 -> setActive(false);
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2 -> setLibelle("Burger");
        $categorie2 -> setImage("burger_cat.jpg");
        $categorie2 -> setActive(true);
        $manager->persist($categorie2);
        $this -> addReference(self::CATEGORIE2_REFERENCE, $categorie2);

        $categorie3 = new Categorie();
        $categorie3 -> setLibelle("Pâtes");
        $categorie3 -> setImage("pasta_cat.jpg");
        $categorie3 -> setActive(true);
        $manager->persist($categorie3);
        $this -> addReference(self::CATEGORIE3_REFERENCE, $categorie3);

        $categorie4 = new Categorie();
        $categorie4 -> setLibelle("Pizza");
        $categorie4 -> setImage("pizza_cat.jpg");
        $categorie4 -> setActive(true);
        $manager->persist($categorie4);
        $this -> addReference(self::CATEGORIE4_REFERENCE, $categorie4);

        $categorie5 = new Categorie();
        $categorie5 -> setLibelle("Salade");
        $categorie5 -> setImage("salade_cat.jpg");
        $categorie5 -> setActive(true);
        $manager->persist($categorie5);
        $this -> addReference(self::CATEGORIE5_REFERENCE, $categorie5);

        $categorie6 = new Categorie();
        $categorie6 -> setLibelle("Sandwich");
        $categorie6 -> setImage("sandwich_cat.jpg");
        $categorie6 -> setActive(true);
        $manager->persist($categorie6);
        $this -> addReference(self::CATEGORIE6_REFERENCE, $categorie6);

        $categorie7 = new Categorie();
        $categorie7 -> setLibelle("Veggie");
        $categorie7 -> setImage("veggie_cat.jpg");
        $categorie7 -> setActive(true);
        $manager->persist($categorie7);
        $this -> addReference(self::CATEGORIE7_REFERENCE, $categorie7);

        $categorie8 = new Categorie();
        $categorie8 -> setLibelle("Wrap");
        $categorie8 -> setImage("wrap_cat.jpg");
        $categorie8 -> setActive(true);
        $manager->persist($categorie8);
        $this -> addReference(self::CATEGORIE8_REFERENCE, $categorie8);

        $manager->flush();
    }
}
