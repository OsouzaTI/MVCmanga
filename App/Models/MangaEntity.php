<?php

namespace App\Models;

class MangaEntity {
    private $title;
    private $nPages;
    private $thumbnail;
    
    public function __construct($title = '', $nPages = 0, $thumbnail = '') {
        $this->title = $title;
        $this->nPages = $nPages;
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail() {
        return $this->thumbnail;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getNPages() {
        return $this->nPages;
    }

}