<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements IRequestController{

    public function processarRequisicao(): void {
        $titulo = "Novo Curso";
        require __DIR__ . '/../../view/cursos/novo-curso.php';
    }

}
