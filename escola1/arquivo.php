<?php
if(!file_exists($fileName)) {
    if(!is_writable(__DIR__)){
        echo 'Não pode criar o arquivo alunos.txt';
        return;
    }

    $handle = fopen($fileName, 'a');
    fclose($handle);
    chmod($fileName, 0777);
}
