<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

class ExcluirCurso implements IRequestController {

    use \Alura\Cursos\Helper\FlashMessage;

    private $entityManager;

    public function __construct() {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processarRequisicao(): void {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if (is_null($id) || $id === false) {
            $this->setMessage('danger', 'Curso inexistente');
            header("Location: /listar-cursos");
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id);
        $this->entityManager->remove($curso);
        $this->entityManager->flush();

        $this->setMessage('success', 'Curso removido com sucesso');

        header("Location: /listar-cursos");
    }

}
