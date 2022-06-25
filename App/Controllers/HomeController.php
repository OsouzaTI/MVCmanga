<?php

namespace App\Controllers;

use App\Controller;
use App\Helpers\MangaHelper;
use Core\Debug;

class HomeController extends Controller {

    public function index() {
        
        $mangas = MangaHelper::getAllMangas();    
        $mostMangaAccess = MangaHelper::getAllMostAccessMangas();
        $chapters = [
            ...MangaHelper::getAllChapters('one-piece'),
            ...MangaHelper::getAllChapters('sunken-rock'),
        ];

        $this->view('Home/index', [
            'mangas' => $mangas,
            'mostMangaAccess' => $mostMangaAccess,
            'chapters' => $chapters
        ]);

    }

}