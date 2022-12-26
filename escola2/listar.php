<?php

require('pdo.php');

$query = $pdo->query("SELECT * FROM alunos");

$datas = $query->fetchAll();

foreach($datas as $data){
    echo "<div class='lista-nomes flex'>
            <span> {$data['matricula']} </span>
            <span> {$data['nome']} </span>
            <span><a href=\\form.php?matricula={$data['matricula']}>Editar</a></span>
            <span><a href=\\apagar.php?matricula={$data['matricula']}>Excluir</a></span>
            </div>";
}




