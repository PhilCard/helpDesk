<?php
 
    session_start();

    /*echo "<pre>";
    print_r($_SESSION);
    echo "<pre/>";
    //remover índices da sessão de array -> unset()


    unset($_SESSION['x']);
    echo "<pre>";
    print_r($_SESSION);
    echo "<pre/>";

    
    session_destroy();


    echo "<pre>";
    print_r($_SESSION);
    echo "<pre/>";
    //destruir sessão 
   */

   session_destroy();
   header('location: ../index.php');


?>