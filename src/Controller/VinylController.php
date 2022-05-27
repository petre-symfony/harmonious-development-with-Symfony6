<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController {
	#[Route('/')]
	public function homepage(): Response {
		return new Response('Title: PB and Jams');
	}

	#[Route('/browse')]
	public function browse(): Response {
		return new Response('Breakup vinyl? Angsty 90s rock? Browse the collection!');
	}
}
