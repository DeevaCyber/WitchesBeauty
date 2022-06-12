<?php

// src/Controller/AboutController.php (Controller pour la page "About Us")
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{

  public function about(): Response
  {
    return $this->render('about.html.twig');
  }
}

?>
