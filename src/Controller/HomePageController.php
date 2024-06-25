<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        return $this->redirectToRoute('app_home_page');
    }

    #[Route('/home/page', name: 'app_home_page')]
    public function homePage(): Response
    {

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'quantiteMedusa' => 1,
            'priceMedusa' => 80,
            'quantitePistil' => 1,
            'pricePistil' => 140,
            'subtotal' => 220,
            'delivery' => 10,
            'total' => 230
        ]);
    }
}
