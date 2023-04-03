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
// busca los nombres y paths de los archivos
$stmt = $pdo->prepare('SELECT nombre, filename, image FROM documents ORDER BY nombre ASC');
$stmt->execute();

// itera a traves de ellos y los muestra como links
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo '<a href="pdfs/' . $row['filename'] . '" target="_blank"><img src="imagenes/' . $row['image'] . '" width="10%" height="10%"></a>';
  echo '<a href="pdfs/' . $row['filename'] . '" target="_blank">' . $row['nombre'] . '</a><br>';
  echo '<form method="post" action="borrarpdf.php">';
  echo '<input type="hidden" name="nombre" value="' . $row['nombre'] . '">';
  echo '<input type="submit" value="Borrar">';
  echo '</form>';
  echo '<br>';
  echo '<form method="post" action="modificarpdf.php">';
  echo '<input type="hidden" name="nombre" value="' . $row['nombre'] . '">';
  echo '<input type="text" name="nombrecambio">';
  echo '<input type="submit" value="Cambiar nombre">';
  echo '</form>';
 echo '<hr>' ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <link href="styleshow.css" rel="stylesheet">
</head>
<br>
<form>
  <input type="submit" formaction="admin.php" value="Volver a la carga de archivos">
</form>