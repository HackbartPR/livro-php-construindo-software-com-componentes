<?php

$nome = trim($_POST['nome'] ?? '');
$matricula = (integer) $_GET['matricula'] ?? null;

require('pdo.php');

if($nome){
    $sql = null;
    if($matricula){
        $sql = "UPDATE alunos SET nome = '$nome' WHERE matricula = $matricula";
    }else{
        $sql = "INSERT INTO alunos (nome) VALUES ('$nome')";
    }

    if(!$pdo->exec(($sql))){
        echo 'Erro ao gravar o registro';
        exit();
    }
}

header('Location: index.php');
