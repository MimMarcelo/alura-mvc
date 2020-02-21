<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Usuario;

class RealizarLogin implements IRequestController{
    
    private $repository;
    
    public function __construct() {
        $entity = (new EntityManagerCreator())->getEntityManager();
        $this->repository = $entity->getRepository(Usuario::class);
    }

    //put your code here
    public function processarRequisicao(): void {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        
        if(is_null($email) || $email === false){
            echo 'e-mail inválido!';
            return;
        }
        /** @var Usuario $usuario **/
        $usuario = $this->repository->findOneBy(['email' => $email]);
                
        if(is_null($usuario)){
            echo 'usuário não encontrado';
            return;
        }
        
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        echo $senha . "<br>";
        if(!$usuario->senhaEstaCorreta($senha)){
            echo 'Senha inválida';
            return;
        }
        
        header("Location: /listar-cursos");
    }

}
