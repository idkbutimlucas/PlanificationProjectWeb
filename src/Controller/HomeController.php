<?php

namespace App\Controller;

use Kreait\Firebase\Firestore;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    private Firestore $firestore;
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $database = $this->firestore->database();

        $collectionReference = $database->collection('User');
        $documentReference = $collectionReference->document('fKWZYNi9Lr18BiAoIMZM');
        $snapshot = $documentReference->snapshot();

        return $this->render('home/index.html.twig', [
            'FirstName' => $snapshot['FirstName'],
        ]);
    }
}
