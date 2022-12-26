<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola 1</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="flex">
    <div class="container flex">
        <h1 class="titulo">Cadastro de Alunos</h1>

        <div class="lista flex">
            <div class="lista-titulo flex">
                <span><strong>Matrícula</strong></span>
                <span><strong>Nome</strong></span>
                <span></span>
                <span></span>
            </div>
            
            <?php require('listar.php') ?>           
        </div>

        <a class="buttons flex" href="form.php">
            <button>Adicionar</button>
        </a>
    </div>
</body>
</html>


