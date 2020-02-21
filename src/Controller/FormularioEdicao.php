<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

class FormularioEdicao extends ControllerHTML implements IRequestController{
    
    private $repositorio;

    public function __construct() {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorio = $entityManager->getRepository(Curso::class);
    }

    public function processarRequisicao(): void {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if (is_null($id) || $id === false) {
            header("Location: /listar-cursos");
            return;
        }

        $curso = $this->repositorio->find($id);
        $data = [
            'curso' => $curso, 
            'titulo' => "Alterar curso {$curso->getDescricao()}"
        ];
        echo $this->getView('cursos/form-curso.php', $data);
    }

}
