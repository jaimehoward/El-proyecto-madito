<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "aromatic_data_base";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error de conexión a la base de datos".mysqli_connect_error();
  }
?>
