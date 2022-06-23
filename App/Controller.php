<?php

namespace App;

use Core\Assets;
use Core\Component;

class Controller {
    public $component;
    public $assets;
    public function __construct() {
        $this->component = new Component();
        $this->assets = new Assets();
    }
    public function view($view, $data = []) {
        $render = function() use($view, $data) {
            require_once __DIR__ . "/Views/{$view}.php";
        };        
        require_once __DIR__ . "/Layout/Default.php";
    }

}