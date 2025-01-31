<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogueController extends AbstractController{
    #[Route('/', name: 'accueil')]
    public function index(Request $request, CategorieRepository $categorieRepository, PlatRepository $platRepository, EntityManagerInterface $em): Response
    {
        $categories = $categorieRepository->findAll();
        $plats = $platRepository->randomPlats();
        return $this->render('catalogue/index.html.twig', [
            'categories' => $categories,
            'plats' => $plats,
        ]);
    }

    #[Route('/plats', name: 'app_plats')]
    public function plats(Request $request, PlatRepository $platRepository, EntityManagerInterface $em): Response
    {
        $plats = $platRepository->findAll();
        return $this->render('catalogue/plats.html.twig', [
            'plats' => $plats
        ]);
    }

    #[Route('/plats/{id}', name: 'app_plats_categorie')]
    public function plats_categorie(string $id, Request $request, PlatRepository $platRepository, CategorieRepository $categorieRepository, EntityManagerInterface $em): Response
    {
        $categorie = $categorieRepository->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException("Cette catégorie n'existe pas.");
        }
        $plats = $platRepository->parCategorie($id);

        return $this->render('catalogue/plats_categorie.html.twig', [
            'plats' => $plats,
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categories', name: 'app_categories')]
    public function categories(Request $request, CategorieRepository $categorieRepository, EntityManagerInterface $em): Response
    {
        $categories = $categorieRepository->findAll();
        return $this->render('catalogue/categories.html.twig', [
            'categories' => $categories
        ]);
    }
}
