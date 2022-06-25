<?php

namespace Core;

use Exception;

class Assets {

    public function fetch($asset) {
        $assetFile = "./App/Assets/$asset";
        if(file_exists($assetFile)) {
            // retorna a pasta sem o ponto
            return substr($assetFile, 1);
        } else {
            throw new Exception("Arquivo $asset não existe!");
        }
    }

}