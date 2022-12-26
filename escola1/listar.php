<?php
define('DS', DIRECTORY_SEPARATOR);

$fileName = __DIR__ . DS . 'alunos.txt';

require('arquivo.php');

$handle = fopen($fileName, 'r');

while(!feof($handle)){
    $record = explode(',', fread($handle, 80));

    if(!empty($record[0])){
        echo "<div class='lista-nomes flex'>
                <span> $record[0] </span>
                <span> $record[1] </span>
                <span><a href=\\form.php?matricula=$record[0]>Editar</a></span>
                <span><a href=\\apagar.php?matricula=$record[0]>Excluir</a></span>
            </div>";       
    }
}

fclose($handle);
