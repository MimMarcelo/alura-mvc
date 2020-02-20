<?php

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\PersistirCurso;
use Alura\Cursos\Controller\ExcluirCurso;

return [
    '' => ListarCursos::class,
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => PersistirCurso::class,
    '/excluir-curso' => ExcluirCurso::class,
];