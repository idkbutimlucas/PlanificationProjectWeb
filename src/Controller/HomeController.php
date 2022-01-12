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

    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $database = $this->firestore->database();
        
        $collectionReference = $database->collection('User');
        $documentReference = $collectionReference->document('F4UNj1km4ZXnZEEczinM');
        $snapshot = $documentReference->snapshot();

        setcookie('UserId', $snapshot['Id']);

        return $this->render('home/index.html.twig', [
            'FirstName' => $snapshot['FirstName'],
            'Id' => $_COOKIE['UserId'],
        ]);
    }
}
