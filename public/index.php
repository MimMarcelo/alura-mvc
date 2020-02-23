<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\PersistirCurso;
use Alura\Cursos\Controller\IRequestController;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
//    echo "Erro 404";
    exit();
}

session_start();

$ehRotaDeLogin = stripos($caminho, 'login');
if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header("Location: /login");
    exit();
}

$controllerClass = $rotas[$caminho];

/** @var IRequestController $controller */
$controller = new $controllerClass();
$controller->processarRequisicao();
