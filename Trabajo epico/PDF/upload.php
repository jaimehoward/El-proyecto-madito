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
$categ = $_POST['categ'];

// Crea un id unico
$filename = uniqid() . '.pdf';
$imageFilename = uniqid() . '.jpg';

// los mueve a la carpeta pdfs
move_uploaded_file($pdf['tmp_name'], 'pdfs/' . $filename);
// lo guarda en la bdd 

$pdfPath = 'pdfs/' . $filename;
$imagePreviewPath = 'img/' . $imageFilename;

$imagick = new \Imagick();
$imagick->setResolution(300, 300); // Ajusta la resolución según tus necesidades
$imagick->readImage($pdfPath . '[0]'); // Lee solo la primera página del PDF
$imagick->setImageFormat('jpg'); // Establece el formato de la imagen de vista previa

// Redimensiona la imagen de vista previa a un tamaño adecuado
$imagick->scaleImage(300, 400, true);

// Guarda la imagen de vista previa
$imagick->writeImage($imagePreviewPath);

// Libera la memoria utilizada por Imagick
$imagick->clear();
$imagick->destroy();


$stmt = $pdo->prepare('INSERT INTO documents (nombre, filename, categoria, image) VALUES (?, ?, ?, ?)');
$stmt->execute([$name, $filename, $categ, $imageFilename]);
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
  <input type="submit" formaction="admin.php" value="Volver a la carga de archivos">
  <input type="submit" formaction="mostrarpdf.php" value="Ver los pdfs">
</form>

