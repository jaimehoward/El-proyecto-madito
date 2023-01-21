<?php
include 'conn.php';
// retoma la sesion
session_start();

// Se fija si se hizo un logjn
if (!isset($_SESSION['user'])) {
  // No esta logueado
  header('Location: login.php');
  exit;
}

// si el usuario se logueo ahora se muestra esto
$name = $_POST['name'];
$pdf = $_FILES['pdf'];

// Crea un id unico
$filename = uniqid() . '.pdf';

// los mueve a la carpeta pdfs
move_uploaded_file($pdf['tmp_name'], 'pdfs/' . $filename);

// lo guarda en la bdd 
$stmt = $pdo->prepare('INSERT INTO documents (nombre, filename) VALUES (?, ?)');
$stmt->execute([$name, $filename]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <link href="style.css" rel="stylesheet">
</head>
<form>
  <input type="submit" formaction="index.php" value="Volver a la carga de archivos">
  <input type="submit" formaction="mostrarpdf.php" value="Ver los pdfs">
</form>

