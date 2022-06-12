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

  //public function face(ManagerRegistry $doctrine, string $category): Response
  //{
    //$category = 'visage';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('face.html.twig', ['product' => $product]);
  //}

  //public function eyes(ManagerRegistry $doctrine, string $category): Response
  //{
    //$category = 'yeux';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('eyes.html.twig', ['product' => $product]);
  //}

  //public function lips(ManagerRegistry $doctrine, string $category): Response
  //{
    //$category = 'lèvres';
    //$product = $doctrine->getRepository(PRODUCT::class)->findByCategorie($category);
    //return $this->render('lips.html.twig', ['product' => $product]);
  //}
}

?>
