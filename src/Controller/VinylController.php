<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class VinylController {
	#[Route('/')]
	public function homepage(){
		die('Vinyl: Definitely NOT a fancy-looking frisbee!');
	}
}
