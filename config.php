<?php
    $user = 'root';
    $pass = '';
    $database = 'aromatic_data_base';
    $host = 'localhost';

    $coneccion = mysqli_connect("localhost", "root", "", "aromatic_data_base");
    mysqli_set_charset($coneccion, "utf8");

    try{
        $conn = new PDO("mysql:host=".$host.";dbname=".$database, $user, $pass);
        /* die("Conectado"); */
    }
    catch (PDOException $e){
        exit("Error: " . $e->getMessage());
    }
?>