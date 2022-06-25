<?php

namespace App\Controllers;

use App\Controller;
use App\Helpers\MangaHelper;

class ReaderController extends Controller {

    public function index($mangaTitle, $mangaChapter) {
        $pages = MangaHelper::getAllPages($mangaTitle, $mangaChapter);
        $this->view('Reader/index', [
            'pages' => $pages,
            'mangaTitle' => $mangaTitle,
            'chapter' => $mangaChapter
        ]);
    }

}