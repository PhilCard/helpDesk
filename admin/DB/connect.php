<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'helpDesk';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn)
    {
        die('connection failed: ' . mysql_connect_error());
    }

?>