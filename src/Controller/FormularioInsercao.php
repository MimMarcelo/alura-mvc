<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerHTML implements IRequestController{

    public function processarRequisicao(): void {
        echo $this->getView('cursos/form-curso.php', ['titulo' => "Novo Curso"]);
    }

}
