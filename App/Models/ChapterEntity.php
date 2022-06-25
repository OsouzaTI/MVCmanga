<?php

namespace App\Models;

class ChapterEntity {
    
    private $title;
    private $url;
    private $thumbnail;

    public function __construct($title = '', $url = '', $thumbnail = '') {
        $this->title = $title;
        $this->url = $url;
        $this->thumbnail = $thumbnail;
    }
    
    public function getTitle(){
        return $this->title;
    }    

    public function getUrl() {
        return $this->url;
    }

    public function getThumbnail() {
        return $this->thumbnail;
    }

}