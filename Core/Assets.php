<?php

namespace Core;

use Exception;

class Assets {

    public function fetch($asset) {
        $assetFile = "App/Assets/$asset";
        if(file_exists($assetFile)) {
            return $assetFile;
        } else {
            throw new Exception("Arquivo $asset não existe!");
        }
    }

}