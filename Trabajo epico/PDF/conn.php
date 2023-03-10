<?php
$host = 'localhost';
$user = 'id20097815_lucas';
$password = 'cDscAMg0x5ad~?pw';
$dbname = 'id20097815_test';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Conexion fallida: " . $e->getMessage();
}
?>
