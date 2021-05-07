<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function index()
    {
        return $this->render('main/home.html.twig', [
            'page_name' => 'ENI ECOLE INFORMATIQUE',
        ]);
    }
}