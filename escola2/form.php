<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="flex">
<div class="container flex">
    <h1 class="titulo">Cadastro de Alunos</h1>

    <div class="lista" >
        <?php 
            $matricula = $_GET['matricula'] ?? null;
            $url = $matricula ? "./gravar.php?matricula=$matricula" : "./gravar.php?";
        ?>
        <form method="POST" action="<?php echo $url ?>">
            <input type="text" name="nome" value="<?php $nome ?>" placeholder="Nome ..." style="width: 100%">
            <input class="buttons" type="submit" value="Salvar">
        </form>
    </div>
</div>
</body>
</html>
