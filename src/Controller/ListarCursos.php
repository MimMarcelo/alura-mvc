<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerHTML implements IRequestController{

    private $repositoriDeCursos;

    public function __construct() {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function processarRequisicao(): void {
        $data = [
            'cursos' => $this->repositorioDeCursos->findAll(),
            'titulo' => "Lista de cursos"
        ];
        //Escrever HTML
        echo $this->getView('cursos/listar-cursos.php', $data);
    }

}
