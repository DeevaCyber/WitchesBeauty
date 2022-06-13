<?php

// src/Controller/HomeController.php (Controller pour la page d'acceuil)
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

  public function home(): Response
  {
    return $this->render('home.html.twig'); // Retourne la partie "Home" du site
  }
}

?>
