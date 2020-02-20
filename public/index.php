<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;

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
    
    default:
        echo "Erro 404";
        break;
}