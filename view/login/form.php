<?php include __DIR__ . '/../cabecalho.php'; ?>
<form action="/realiza-login" method="post">
    <div class="form-group">
        <label for="email">e-mail</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="entrar">
</form>
<?php include __DIR__ . '/../rodape.php'; ?>