<?php

namespace App\Controllers;

use App\Controller;

class ReaderController extends Controller {

    public function index() {

        $this->view('Reader/index');
        
    }

}