<?php

namespace App\Models;

class ChapterEntity {
    
    private $pages;

    public function __construct($pages = []) {
        $this->pages = $pages;
    }
    
    public function getPages() {
        return $this->pages;
    }

}