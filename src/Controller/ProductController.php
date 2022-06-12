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

  public function face(ManagerRegistry $doctrine): Response
  {
    //$category = 'visage';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('face.html.twig', ['product' => $product]);

    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'visage']);
    return $this->render('face.html.twig', ['product' => $product]);
  }

  public function eyes(ManagerRegistry $doctrine): Response
  {
    //$category = 'yeux';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('eyes.html.twig', ['product' => $product]);
    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'yeux']);
    return $this->render('eyes.html.twig', ['product' => $product]);
  }

  public function lips(ManagerRegistry $doctrine): Response
  {
    //$category = 'lèvres';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('lips.html.twig', ['product' => $product]);
    $product = $doctrine->getRepository(PRODUCT::class)->findBy(['category' => 'lèvres']);
    return $this->render('lips.html.twig', ['product' => $product]);
  }
}

?>
