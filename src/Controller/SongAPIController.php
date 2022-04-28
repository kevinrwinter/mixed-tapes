<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongAPIController extends AbstractController {

  #[Route('/api/songs/{id}', methods: ['GET'])]
  public function getSong($id): Response {

    // dd($id);

    $song = [
      'id' => $id,
      'name' => 'Old Finnish  Song',
      'url' => 'https://unelmamusic.s3.eu-central-1.amazonaws.com/uploads/tracks/2036026912_839752378_1109660472.mp3?response-content-disposition=filename%3DLoituma%20-%20Ievan%20Polkka.mp3&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJ5F66J5X724NSRAQ%2F20220425%2Feu-central-1%2Fs3%2Faws4_request&X-Amz-Date=20220425T143811Z&X-Amz-SignedHeaders=host&X-Amz-Expires=432000&X-Amz-Signature=003f989a79ee89dec20cca736243225c48dfec00f34986b8df49bb1fe7aef5f2'
    ];

    // Symfony:
    // return new JsonResponse($song);

    // PHP:
    return $this->json($song);

  }

}


?>