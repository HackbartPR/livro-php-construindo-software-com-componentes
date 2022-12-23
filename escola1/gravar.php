<?php
//DS = WIN => '\'   LIN => '/'  MAC => '/'
define('DS', DIRECTORY_SEPARATOR);

$nome = trim($_POST['nome'] ?? '');
$matricula = trim($_POST['matricula'] ?? '');

if($nome){
    $fileName = __DIR__ . DS . 'alunos.txt';
    require('arquivo.php');

    $handle =fopen($fileName, 'r');

    //Cadastro de Livros
    if(!$matricula){
        $ultimaMatricula = null;
        while(!feof($handle)){
            $record = explode(',', fread($handle, 80));
            $ultimaMatricula = (isset($record[0]) && empty($record[0]))	? $ultimaMatricula : $record[0]; 
        }
        fclose($handle);

        $handle = fopen($fileName, 'a');
        $matricula = $ultimaMatricula + 1;
        fwrite($handle,	substr($matricula	.	','	.	$nome	.	','	.	str_repeat('	',	80),	0,	78)	.	",\n",	80);
        fclose($handle);

    }

}

