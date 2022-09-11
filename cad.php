<?php

// validar o formulário

// gravar infos do formulários no arquivo

// Usar o scandir(ver documentação) para listar os nomes de arquivos criado.

// Criar automaticamente links que possam levar ao arquivo readInfo.php de modo que cada link passe via GET 
// o nome do arquivo a ser lido

extract($_POST);

$dado = $nome."\r\n".$cargo."\r\n".$salario."\r\n".$dependente."\r\n";

$refFile = fopen("cadastros/$id.txt", "a+");

fwrite($refFile, $dado);

fclose($refFile);

$file = scandir("cadastros");   

$size = count($file);


for ($i=0; $i < $size; $i++) {
    if($file[$i] != '.' && $file[$i] != '..'){
        echo '<a href=readinfo.php?id='.$file[$i].'>'.$file[$i].'<br>';
    }
}


?>