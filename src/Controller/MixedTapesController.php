<?php 
// Controller function

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MixedTapesController {

  #[Route('/')]
  // #[Route('/home')]
  public function homepage(): Response
  {

    // die("Mixed-Tapes: Surely, not fancy-looking page");
    return new Response("Pink Floyd --- Another Brick In the wall");
    
  }
  
}

?>