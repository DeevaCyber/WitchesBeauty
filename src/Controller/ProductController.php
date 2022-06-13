<?php

// src/Controller/ProductController.php (Controller pour la page des produits)
namespace App\Controller;

use App\Entity\PRODUCT;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

  public function all(ManagerRegistry $doctrine): Response
  {
    $product = $doctrine->getRepository(PRODUCT::class)->findAll();
    // Cherche toutes les produits
    return $this->render('all.html.twig', ['product' => $product]);
    // Retourne la partie "All" du site avec l'array des produits
  }

  public function face(ManagerRegistry $doctrine): Response
  {
    //$category = 'visage';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('face.html.twig', ['product' => $product]);

    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'visage']);
    // Cherche toutes les produits ayant pour catégorie "Visage"
    return $this->render('face.html.twig', ['product' => $product]);
    // Retourne la partie "Face" du site avec l'array des produits catégorie "Visage"
  }

  public function eyes(ManagerRegistry $doctrine): Response
  {
    //$category = 'yeux';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('eyes.html.twig', ['product' => $product]);

    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'yeux']);
    // Cherche toutes les produits ayant pour catégorie "Yeux"
    return $this->render('eyes.html.twig', ['product' => $product]);
    // Retourne la partie "Eyes" du site avec l'array des produits catégorie "Yeux"
  }

  public function lips(ManagerRegistry $doctrine): Response
  {
    //$category = 'lèvres';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('lips.html.twig', ['product' => $product]);

    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'lèvres']);
    // Cherche toutes les produits ayant pour catégorie "Lèvres"
    return $this->render('lips.html.twig', ['product' => $product]);
    // Retourne la partie "Lips" du site avec l'array des produits catégorie "Lèvres"
  }

  public function show(ManagerRegistry $doctrine, int $id): Response
  {

      $product = $doctrine->getRepository(PRODUCT::class)->findBy(['id' => $id]);
      // Cherche un produit spécifique à partir de son id
      return $this->render('show.html.twig', ['product' => $product]);
      // Retourne la partie "Show" du site avec l'array du produit recherché

  }

}

?>
