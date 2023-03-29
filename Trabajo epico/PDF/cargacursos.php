<?php
  // retoma la sesion
  session_start();

  // Se fija si se hizo un logjn
  if (!isset($_SESSION['user'])) {
    // No esta logueado
    header('Location: login.php');
    exit;
  }

  // si el usuario se logueo ahora se muestra esto
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <form action="guardar_curso.php" method="POST" enctype="multipart/form-data">
        <label for="fecha_inicio">Fecha de inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br>
      
        <label for="fecha_fin">Fecha de finalización:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br>
      
        <label for="fecha_inicio_inscripcion">Fecha de inicio de la inscripción:</label>
        <input type="date" id="fecha_inicio_inscripcion" name="fecha_inicio_inscripcion" required><br>
      
        <label for="fecha_fin_inscripcion">Fecha de finalización de la inscripción:</label>
        <input type="date" id="fecha_fin_inscripcion" name="fecha_fin_inscripcion" required><br>
      
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
      
        <label for="nombre_curso">Nombre del curso:</label>
        <input type="text" id="nombre_curso" name="nombre_curso" required><br>
      
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br>
      
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen"><br>
      
        <input type="submit" value="Guardar">
      </form>
      
</body>
</html>