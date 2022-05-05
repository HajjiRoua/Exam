<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheConController extends AbstractController
{
    #[Route('/affiche/con', name: 'app_affiche_con')]
    public function index(): Response
    {
        return $this->render('affiche_con/index.html.twig', [
            'controller_name' => 'AfficheConController',
        ]);}

        #[Route('/affiche', name: 'app_affiche')]
     public function affiche(ManagerRegistry $doctrine): Response
    {
    $reposite = $doctrine->getRepository(Entreprise::class);
    $entreprises = $reposite->findAll();
    $array = [];
        foreach ($entreprises as $entreprise) {

    }
        return $this->render('affiche/index.html.twig', [
            'controller_name' => 'AfficheCon',
        ]);
    }
    }

