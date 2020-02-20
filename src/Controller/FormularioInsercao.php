<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements IRequestController{

    public function processarRequisicao(): void {
        require __DIR__ . '/../../view/cursos/novo-curso.php';
    }

}
