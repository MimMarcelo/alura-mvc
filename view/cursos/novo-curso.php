<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Listar cursos</h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="descricao">Curso:</label>
                    <input type="text" id="descricao" name="descricao" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="/listar-cursos" class="btn">Voltar</a>
            </form>
        </div>
    </body>
</html>