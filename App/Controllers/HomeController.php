<?php

namespace App\Controllers;

use App\Controller;
use App\Helpers\MangaHelper;
use Core\Debug;

class HomeController extends Controller {

    public function index() {
        
        $mangas = MangaHelper::getAllMangas();        
        $this->view('Home/index', ['mangas' => $mangas]);

    }

}