<?php

namespace App\Helpers;

use App\Models\ChapterEntity;
use App\Models\MangaEntity;
use Core\Debug;

class MangaHelper {
    
    static private $mangasPath = 'App/Assets/mangas';

    static function scanDirectory($dirName) {
        $dir = scandir($dirName);
        return array_slice($dir, 2);
    }

    static public function getAllMangas() {
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
                $mangaEntity = new MangaEntity($finalMangaTitle, $manga, count($pages), "$chapterPath/{$pages[0]}");
                // Debug::debug($manga);
                array_push($mangas, $mangaEntity);
            }
        }
        return $mangas;
    }

    static public function getAllChapters($mangaTitle) {
        $chapters = [];
        $mangaPath = implode('/', [MangaHelper::$mangasPath, $mangaTitle]);
        $chaptersPath = MangaHelper::scanDirectory($mangaPath);
        foreach($chaptersPath as $chapter) {
            $chapterPath = implode('/', [$mangaPath, $chapter]);
            $thumbnail = MangaHelper::scanDirectory($chapterPath);
            if(count($thumbnail) > 0)
                $thumbnail = implode('/', ["/$chapterPath", $thumbnail[0]]) ;
            $chapterEntity = new ChapterEntity($chapter, implode('/', [$mangaTitle, $chapter]), $thumbnail??'');
            array_push($chapters, $chapterEntity);
        }
        return $chapters;
    }

    static public function getAllPages($mangaTitle, $chapter) {
        $pages = [];
        $chapterPath = implode('/', [MangaHelper::$mangasPath, $mangaTitle, $chapter]);
        $pagesPath = MangaHelper::scanDirectory($chapterPath);
        foreach($pagesPath as $page) {
            array_push($pages, implode('/', ["/$chapterPath", $page]));
        }
        return $pages;
    }

}