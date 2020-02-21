<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerHTML implements IRequestController{
    //put your code here
    public function processarRequisicao(): void {
        
        echo $this->getView('login/form.php', ['titulo' => 'Login']);
    }

}
