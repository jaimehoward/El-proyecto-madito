<?php
include 'conn.php';

// consigue el nombre

$nombre = $_POST['nombre'];
$nombre2 = $_POST['nombrecambio'];

// actualiza el nombre
$stmt = $pdo->prepare('UPDATE documents SET nombre = ? WHERE nombre = ?');
$stmt->execute([$nombre2, $nombre]);

// volves a la lista
header('Location: mostrarpdf.php');
exit;