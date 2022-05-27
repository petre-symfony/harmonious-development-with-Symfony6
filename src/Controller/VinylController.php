<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController {
	#[Route('/')]
	public function homepage(): Response {
		return new Response('Title: PB and Jams');
	}

	#[Route('/browse/{slug}')]
	public function browse(string $slug): Response {
		$title = u(str_replace('-', ' ', $slug))->title();

		return new Response('Genre: ' . $title);
	}
}
