<?php

namespace App\Models;

class MangaEntity {
    private $title;
    private $nPages;
    private $thumbnail;
    private $url;
    
    public function __construct($title = '', $url = '', $nPages = 0, $thumbnail = '') {
        $this->title = $title;
        $this->url = $url;
        $this->nPages = $nPages;
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail() {
        return $this->thumbnail;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getNPages() {
        return $this->nPages;
    }

}