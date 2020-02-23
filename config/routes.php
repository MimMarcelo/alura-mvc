<?php

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\PersistirCurso;
use Alura\Cursos\Controller\ExcluirCurso;
use Alura\Cursos\Controller\FormularioEdicao;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\RealizarLogin;
use Alura\Cursos\Controller\Logout;

return [
    '' => FormularioLogin::class,
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => PersistirCurso::class,
    '/excluir-curso' => ExcluirCurso::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Logout::class,
];