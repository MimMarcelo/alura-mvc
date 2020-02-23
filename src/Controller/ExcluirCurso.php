<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

class ExcluirCurso implements IRequestController {

    private $entityManager;

    public function __construct() {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processarRequisicao(): void {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if (is_null($id) || $id === false) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'Curso inexistente';
            header("Location: /listar-cursos");
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id);
        $this->entityManager->remove($curso);
        $this->entityManager->flush();
        
        $_SESSION['tipoMensagem'] = 'success';
        $_SESSION['mensagem'] = 'Curso removido com sucesso';

        header("Location: /listar-cursos");
    }

}
