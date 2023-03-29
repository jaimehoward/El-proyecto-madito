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
$stmt = $pdo->prepare('SELECT * FROM cursos WHERE fecha_fin_insc <= CURRENT_DATE() AND fecha_ini >=CURRENT_DATE() ORDER BY  fecha_ini ASC');
$stmt->execute();
$cursos = $stmt->fetchAll();

// itera a traves de ellos y los muestra como links
// Display the courses in HTML
if (count($cursos) > 0) {
  foreach ($cursos as $curso) {
    echo '<div>';
    echo '<h3>' . $curso['titulo'] . '</h3>';
    echo '<h4>' . $curso['nombre_curso'] . '</h4>';
    echo '<p>' . $curso['descripcion'] . '</p>';
    echo '<img src="imagenes/' . $curso['imagen'] . '" style="width: 20%; height: 20%;>'; 
    echo '</div>';
    echo '<hr>';
    echo '</div>';

  }
} else {
  echo '<p>No hay cursos disponibles en este momento.</p>';
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
    <form>
  <input type="submit" formaction="index.php" value="Volver a la carga de archivos">
</form>
</head>
