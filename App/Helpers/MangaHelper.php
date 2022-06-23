<?php

namespace App\Helpers;

use App\Models\MangaEntity;
use Core\Debug;

class MangaHelper {
    
    static private $mangasPath = 'App/Assets/mangas';

    static function scanDirectory($dirName) {
        $dir = scandir($dirName);
        return array_slice($dir, 2);
    }

    static function getAllMangas() {
        $mangas = [];
        $mangasPath = MangaHelper::scanDirectory(MangaHelper::$mangasPath);
        foreach ($mangasPath as $manga)
        {               
            $chaptersPath = MangaHelper::$mangasPath. '/' . $manga;                
            $chapters = MangaHelper::scanDirectory($chaptersPath);
            $mangaTitle = implode(' ', explode('-', $manga));
            foreach ($chapters as $chapter)
            {
                $chapterPath = "$chaptersPath/$chapter";
                $pages = MangaHelper::scanDirectory($chapterPath);

                $finalMangaTitle = ucwords($mangaTitle) .' - '. "[$chapter]";
                $manga = new MangaEntity($finalMangaTitle, count($pages), "$chapterPath/{$pages[0]}");
                // Debug::debug($manga);
                array_push($mangas, $manga);
            }
        }
        return $mangas;
    }

}