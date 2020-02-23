<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Usuario;

class RealizarLogin implements IRequestController {

    private $repository;

    public function __construct() {
        $entity = (new EntityManagerCreator())->getEntityManager();
        $this->repository = $entity->getRepository(Usuario::class);
    }

    //put your code here
    public function processarRequisicao(): void {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email === false) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'e-mail inválido!';
            header("Location: /login");
            return;
        }
        /** @var Usuario $usuario * */
        $usuario = $this->repository->findOneBy(['email' => $email]);

        if (is_null($usuario)) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'usuário não encontrado';
            header("Location: /login");
            return;
        }

        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
//        echo $senha . "<br>";
        if (!$usuario->senhaEstaCorreta($senha)) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'Senha inválida';
            header("Location: /login");
            return;
        }

        $_SESSION['logado'] = true;

        header("Location: /listar-cursos");
    }

}
