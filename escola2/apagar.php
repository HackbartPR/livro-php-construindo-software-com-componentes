<?php

$matricula = (integer) $_GET['matricula'] ?? null;

require('pdo.php');

if(!$matricula){
    echo "Registro não encontrado!";
    exit();
}

$sql = "DELETE FROM alunos WHERE matricula = $matricula";

if(!$pdo->exec($sql)){
    echo "Erro ao deletar registro";
    exit();
}

header('Location: index.php');
