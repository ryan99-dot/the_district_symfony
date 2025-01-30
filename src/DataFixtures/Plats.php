<?php

namespace App\DataFixtures;

use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\DataFixtures\Categories;
use App\Entity\Categorie;

class Plats extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $burger_cat = $this -> getReference(Categories::CATEGORIE2_REFERENCE, Categorie::class);
        $pates_cat = $this -> getReference(Categories::CATEGORIE3_REFERENCE, Categorie::class);
        $pizza_cat = $this -> getReference(Categories::CATEGORIE4_REFERENCE, Categorie::class);
        $salade_cat = $this -> getReference(Categories::CATEGORIE5_REFERENCE, Categorie::class);
        $sandwich_cat = $this -> getReference(Categories::CATEGORIE6_REFERENCE, Categorie::class);
        $veggie_cat = $this -> getReference(Categories::CATEGORIE7_REFERENCE, Categorie::class);
        $wrap_cat = $this -> getReference(Categories::CATEGORIE8_REFERENCE, Categorie::class);

        $burger1 = new Plat();
        $burger1 -> setLibelle("Big Burger");
        $burger1 -> setDescription("2 steaks, 2 tranches de cheddar, salade, tomate, oignons cuits et mayonnaise");
        $burger1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $burger1 -> setImage("big_burger.jpeg");
        $burger1 -> setActive(true);
        $burger1 -> setCategorie($burger_cat);
        $manager->persist($burger1);

        $burger2 = new Plat();
        $burger2 -> setLibelle("Cheeseburger");
        $burger2 -> setDescription("Bun brioché, steak façon bouchère, 2 tranches de cheddar, bacon et sauce BBQ");
        $burger2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $burger2 -> setImage("cheeseburger.jpg");
        $burger2 -> setActive(true);
        $burger2 -> setCategorie($burger_cat);
        $manager->persist($burger2);

        $burger3 = new Plat();
        $burger3 -> setLibelle("Burger Gourmet");
        $burger3 -> setDescription("Bun brioché, steak façon bouchère, salade, cornichon, oignons caramélisés et sauce burger");
        $burger3 -> setPrix($faker -> randomFloat(2, 5, 20));
        $burger3 -> setImage("burger_gourmet.jpg");
        $burger3 -> setActive(true);
        $burger3 -> setCategorie($burger_cat);
        $manager->persist($burger3);

        $burger4 = new Plat();
        $burger4 -> setLibelle("Bacon Cheeseburger");
        $burger4 -> setDescription("Bun brioché, steak, bacon, cheddar, salade, tomate et moutarde");
        $burger4 -> setPrix($faker -> randomFloat(2, 5, 20));
        $burger4 -> setImage("bacon_cheeseburger.jpg");
        $burger4 -> setActive(true);
        $burger4 -> setCategorie($burger_cat);
        $manager->persist($burger4);

        $pates1 = new Plat();
        $pates1 -> setLibelle("Spaghetti aux légumes");
        $pates1 -> setDescription("Spaghettis, poivrons,sauce tomate et oignons");
        $pates1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pates1 -> setImage("spaghetti_legumes.jpg");
        $pates1 -> setActive(true);
        $pates1 -> setCategorie($pates_cat);
        $manager->persist($pates1);

        $pates2 = new Plat();
        $pates2 -> setLibelle("Lasagnes");
        $pates2 -> setDescription("Pâtes lasagne, viande hachée, sauce tomate, béchamel, oignons, carottes et fromages");
        $pates2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pates2 -> setImage("lasagnes.jpg");
        $pates2 -> setActive(true);
        $pates2 -> setCategorie($pates_cat);
        $manager->persist($pates2);

        $pates3 = new Plat();
        $pates3 -> setLibelle("Tagliatelles au saumon");
        $pates3 -> setDescription("Tagliatelles, saumon et crème fraîche");
        $pates3 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pates3 -> setImage("tagliatelles_saumon.webp");
        $pates3 -> setActive(true);
        $pates3 -> setCategorie($pates_cat);
        $manager->persist($pates3);

        $pizza1 = new Plat();
        $pizza1 -> setLibelle("Pizza Nordique");
        $pizza1 -> setDescription("Crème fraîche, saumon, jus de citron et jeunes pousses");
        $pizza1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pizza1 -> setImage("pizza_nordique.png");
        $pizza1 -> setActive(true);
        $pizza1 -> setCategorie($pizza_cat);
        $manager->persist($pizza1);

        $pizza2 = new Plat();
        $pizza2 -> setLibelle("Pizza Margherita");
        $pizza2 -> setDescription("Sauce tomate, mozzarella, tomates et basilic");
        $pizza2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pizza2 -> setImage("pizza_margherita.jpg");
        $pizza2 -> setActive(true);
        $pizza2 -> setCategorie($pizza_cat);
        $manager->persist($pizza2);

        $pizza3 = new Plat();
        $pizza3 -> setLibelle("Pizza Merguez");
        $pizza3 -> setDescription("Sauce tomate, mozzarella, merguez, tomates, olives et basilic");
        $pizza3 -> setPrix($faker -> randomFloat(2, 5, 20));
        $pizza3 -> setImage("pizza_merguez.jpg");
        $pizza3 -> setActive(true);
        $pizza3 -> setCategorie($pizza_cat);
        $manager->persist($pizza3);

        $salade1 = new Plat();
        $salade1 -> setLibelle("Salade Caesar");
        $salade1 -> setDescription("Salade, poulet grillé, tomates cerises, croûtons et sauce Caesar");
        $salade1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $salade1 -> setImage("salade_caesar.jpg");
        $salade1 -> setActive(true);
        $salade1 -> setCategorie($salade_cat);
        $manager->persist($salade1);

        $salade2 = new Plat();
        $salade2 -> setLibelle("Salade au poulet");
        $salade2 -> setDescription("Salade, poulet grillé, concombre, maïs, tomates cerises et vinaigrette");
        $salade2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $salade2 -> setImage("salade_poulet.png");
        $salade2 -> setActive(true);
        $salade2 -> setCategorie($salade_cat);
        $manager->persist($salade2);

        $sandwich1 = new Plat();
        $sandwich1 -> setLibelle("Grilled Cheese");
        $sandwich1 -> setDescription("Pain de mie toasté, fromages et moutarde américaine");
        $sandwich1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $sandwich1 -> setImage("grilled_cheese.jpg");
        $sandwich1 -> setActive(true);
        $sandwich1 -> setCategorie($sandwich_cat);
        $manager->persist($sandwich1);

        $veggie1 = new Plat();
        $veggie1 -> setLibelle("Cougettes farcies veggie");
        $veggie1 -> setDescription("Courgettes, riz, haché végétal et champignons");
        $veggie1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $veggie1 -> setImage("courgettes_farcies.jpg");
        $veggie1 -> setActive(true);
        $veggie1 -> setCategorie($veggie_cat);
        $manager->persist($veggie1);

        $veggie2 = new Plat();
        $veggie2 -> setLibelle("Tarte veggie");
        $veggie2 -> setDescription("Crème fraîche, épinards et jeunes pousses");
        $veggie2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $veggie2 -> setImage("tarte_veggie.jpg");
        $veggie2 -> setActive(true);
        $veggie2 -> setCategorie($veggie_cat);
        $manager->persist($veggie2);

        $wrap1 = new Plat();
        $wrap1 -> setLibelle("Buffalo Chicken Wrap");
        $wrap1 -> setDescription("Tortilla de blé, poulet façon wings, salade, carotte, avocat, fromage frais et tabasco");
        $wrap1 -> setPrix($faker -> randomFloat(2, 5, 20));
        $wrap1 -> setImage("buffalo_chicken.webp");
        $wrap1 -> setActive(true);
        $wrap1 -> setCategorie($wrap_cat);
        $manager->persist($wrap1);

        $wrap2 = new Plat();
        $wrap2 -> setLibelle("Wrap Caesar");
        $wrap2 -> setDescription("Tortilla de blé, poulet grillé, parmesan, salade, tomates et sauce Caesar");
        $wrap2 -> setPrix($faker -> randomFloat(2, 5, 20));
        $wrap2 -> setImage("wrap_caesar.jpg");
        $wrap2 -> setActive(true);
        $wrap2 -> setCategorie($wrap_cat);
        $manager->persist($wrap2);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return[
            Categories::class,
        ];
    }
}
