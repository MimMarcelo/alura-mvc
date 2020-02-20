<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\PersistirCurso;

switch ($_SERVER['PATH_INFO']) {
    case "":
    case "/listar-cursos":
        $controller = new ListarCursos();
        $controller->processarRequisicao();
        break;
    
    case "/novo-curso":
        $controller = new FormularioInsercao();
        $controller->processarRequisicao();
        break;
    
    case "/salvar-curso":
        $controller = new PersistirCurso();
        $controller->processarRequisicao();
        break;
    
    default:
        echo "Erro 404";
        break;
}