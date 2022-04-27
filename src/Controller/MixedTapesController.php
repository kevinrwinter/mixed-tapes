<?php 
// Controller function

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MixedTapesController extends AbstractController {

  #[Route('/')]
  // #[Route('/home')]
  public function homepage(): Response
  {

    // die("Mixed-Tapes: Surely, not fancy-looking page");
    
    // return new Response("Pink Floyd --- Another Brick In the wall");

    $tracks = [
      ['song'=>'Gangsta\'s Paradise', 'artist'=> 'Coolio'],
      ['song'=>'Waterfalls', 'artist'=> 'TLC'],
      ['song'=>'Creep', 'artist'=> 'Radiohead'],
      ['song'=>'Kiss From a Rose', 'artist'=> 'Seal'],
      ['song'=>'On Bended Knee', 'artist'=> 'Boyz II Men'],
      ['song'=>'Fantasy', 'artist'=> 'Mariah Carey'],
    ];

    // Debug:
    // dd($tracks);
    // Dev tools:
    // dump($tracks);
    
    return $this->render('mixed/homepage.html.twig', [
      'title' => 'Mixed 90s music',
      'tracks' => $tracks,
    ]);
  }

  #[Route('/browse/{slug}')]
  public function browse(string $slug = null): Response
  {
    $genre = $slug ? u(str_replace('-', '', $slug))->title(true): null;

    return $this->render('mixed/browse.html.twig', [
      'genre' => $genre
    ]);
  }
}

?>