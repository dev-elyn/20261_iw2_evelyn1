<?php
    $host = "localhost";
    $db_name = "formulario";
    $port = "3306";
    $usuario = "root";
    $senha = "usbw";
    $endereco = "mysql:host=localhost;dbname=formulario;port=3306";

    $conn = new PDO ($endereco, $usuario, $senha);
?>