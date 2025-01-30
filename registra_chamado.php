<?php
    
    echo "<pre>";
    print_r($_POST);
    echo "<pre/>";

    $arquivo = fopen('arquivo.hd', 'a');
    //abre arquivo

   $titulo = str_replace('#', '-', $_POST['titulo']);
   $categoria = str_replace('#', '-', $_POST['categoria']);
   $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo .'#'. $categoria .'#'. $descricao. PHP_EOL;

    fwrite($arquivo, $texto);
    //escreve arquivo

    fclose($arquivo);
    //fecha arquivo
    echo $texto;

    header('Location: abrir_chamado.php');
?>