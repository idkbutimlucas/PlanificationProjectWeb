<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventCreatorController extends AbstractController
{
    #[Route('/event/creator', name: 'event_creator')]
    public function index(): Response
    {
        return $this->render('event_creator/index.html.twig', [
            'controller_name' => 'EventCreatorController',
        ]);
    }
}
