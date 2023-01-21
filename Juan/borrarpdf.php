<?php
include 'conn.php';

// agarra el nombre a borrar
$nombre = $_POST['nombre'];

// lo borra
$stmt = $pdo->prepare('DELETE FROM documents WHERE nombre = ?');
$stmt->execute([$nombre]);

// te devuelve a mostrar.pdf
header('Location: mostrarpdf.php');
exit;