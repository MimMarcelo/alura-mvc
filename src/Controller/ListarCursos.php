<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements IRequestController{

    private $repositoriDeCursos;

    public function __construct() {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function processarRequisicao(): void {
        $cursos = $this->repositorioDeCursos->findAll();
        //Escrever HTML
        require __DIR__ . '/../../view/cursos/listar-cursos.php';
    }

}
