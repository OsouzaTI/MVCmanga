<?php


namespace App\Controllers;

use App\Controller;
use App\Helpers\MangaHelper;

class MangaController extends Controller {

    public function index($mangaTitle) {        
        $chapters = MangaHelper::getAllChapters($mangaTitle);
        $this->view('Manga/index', [
            'mangaTitle' => ucwords(implode(' ', explode('-', $mangaTitle))), 
            'chapters' => $chapters
        ]);
    }

}