<?php

namespace App\Controller;

use Google\Cloud\Firestore\FirestoreClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Firestore;

class HomeController extends AbstractController
{
    /*private Firestore $database;

    public function __construct(Firestore $firestore)
    {
        $this->database = $firestore;
    }*/

    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $firestore = new FirestoreClient();
        $collectionReference = $firestore->collection('User');
        $documentReference = $collectionReference->document('F4UNj1km4ZXnZEEczinM');
        $snapshot = $documentReference->snapshot();


        return $this->render('home/index.html.twig', [
            'FirstName' => $snapshot['FirstName'],
        ]);
    }
}
