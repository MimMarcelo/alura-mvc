<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Cursos\Controller;

/**
 * Description of ControllerHTML
 *
 * @author marcelo
 */
class ControllerHTML {
    
    public function getView(string $path, array $data): string {
        extract($data);
        ob_start();
        require require __DIR__ . "/../../view/$path";
        return ob_get_clean();
    }
}
