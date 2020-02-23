<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Cursos\Controller;

/**
 * Description of Logout
 *
 * @author marcelo
 */
class Logout implements IRequestController{
    //put your code here
    public function processarRequisicao(): void {
        session_destroy();
        header("Location: /login");
    }

}
