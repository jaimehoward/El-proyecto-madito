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
$fecha_ini = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$fecha_ini_insc = $_POST['fecha_inicio_inscripcion'];
$fecha_fin_insc = $_POST['fecha_fin_inscripcion'];
$titulo = $_POST['titulo'];
$nombre_curso = $_POST['nombre_curso'];
$descripcion = $_POST['descripcion'];
$image = $_FILES['imagen'];

// Crea un id unico
$imageFilename = uniqid() . '.jpg';// los mueve a la carpeta jpgs
move_uploaded_file($image['tmp_name'], 'imagenes/' . $imageFilename);


$stmt = $pdo->prepare('INSERT INTO cursos (fecha_ini, fecha_fin, fecha_ini_insc, fecha_fin_insc, titulo, nombre_curso, descripcion, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
$stmt->execute([$fecha_ini, $fecha_fin, $fecha_ini_insc, $fecha_fin_insc, $titulo, $nombre_curso, $descripcion, $imageFilename]);
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
  <input type="submit" formaction="cargacursos.php" value="Volver a la carga de cursos">
  <input type="submit" formaction="mostrarpdf.php" value="Ver los pdfs">
</form>

