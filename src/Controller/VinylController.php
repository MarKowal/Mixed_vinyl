<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class VinylController{

    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Twórca: Janko Muzykant');
    }

    #[Route('/browse')]
    public function browse(): Response
    {
        return new Response('Tytuł: Nad jeziorem');
    }
}