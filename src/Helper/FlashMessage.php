<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Alura\Cursos\Helper;

/**
 *
 * @author marcelo
 */
trait FlashMessage {

    public function setMessage(string $tipo, string $message): void {
        $_SESSION['tipoMensagem'] = $tipo;
        $_SESSION['mensagem'] = $message;
    }

}
