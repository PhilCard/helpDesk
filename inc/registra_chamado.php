<?php

    require('../admin/DB/connect.php');

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO chamados(idChamado, titulo, categoria, descricao) VALUES (NULL, '$titulo','$categoria','$descricao')";

    if(mysqli_query($conn,$sql))
    {
        echo 'inserido com sucesso';
        header('Location: home.php');
        exit;
    }
    else
    {
        echo 'error ao inserir ' . mysqli_error($conn);
    }
    mysqli_close($conn);

?>