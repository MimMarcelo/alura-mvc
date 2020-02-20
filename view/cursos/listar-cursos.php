<?php include __DIR__ . '/../cabecalho.php'; ?>
<a href="/novo-curso" class="btn btn-primary">Novo Curso</a>
<ul class="list-group">
    <?php foreach ($cursos as $curso): ?>
        <li class="list-group-item d-flex justify-content-between">
            <?= $curso->getDescricao(); ?>
            <a href="/excluir-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include __DIR__ . '/../rodape.php'; ?>