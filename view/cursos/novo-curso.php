<?php include __DIR__ . '/../cabecalho.php'; ?>
<form>
    <div class="form-group">
        <label for="descricao">Curso:</label>
        <input type="text" id="descricao" name="descricao" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar">
    <a href="/listar-cursos" class="btn">Voltar</a>
</form>
<?php include __DIR__ . '/../rodape.php'; ?>