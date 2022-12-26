<?php
//DS = WIN => '\'   LIN => '/'  MAC => '/'
define('DS', DIRECTORY_SEPARATOR);

$nome = trim($_POST['nome'] ?? '');
$matricula = trim($_POST['matricula'] ?? '');

if($nome){
    $fileName = __DIR__ . DS . 'alunos.txt';
    require('arquivo.php');

    $handle =fopen($fileName, 'r');

    //Cadastro de Alunos
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
    //Alteração
    else{
        $tmpFileName = __DIR__ . DS . 'alunos.tmp';
        $tmpHandle = fopen($tmpFileName, 'w');
        while(! feof($tmpHandle)){
            $row = fread($tmpHandle, 80);
            $record = explode(',', $row);
            $ultimaMatricula = (isset($record[0]) && empty($record[0]))	? $ultimaMatricula : $record[0];

            if($ultimaMatricula === $matricula){
                fwrite($handle,	substr($matricula	.	','	.	$nome	.	','	.	str_repeat('	',	80),	0,	78)	.	",\n",	80);
            }else{
                fwrite($tmpHandle,	$row);
            }
        }

        fclose($tmpHandle);
        fclose($handle);
        unlink($filename);
        copy($tmpFilename,	$filename);
    }

    //fclose($handle);
}

header('Location: index.php');
