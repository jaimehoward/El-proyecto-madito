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
    <h1>
       Carga de PDF
    </h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="name">Ingresa el nombre del documento:</label><br>
        <input type="text" name="name" id="name" required><br><br>
        <label for="pdf">Selecciona un archivo PDF para cargar:</label><br>
        <input type="file" name="pdf" id="pdf" required><br><br>
        <label for="image">Selecciona una imagen para cargar (portada del archivo):</label><br>
        <input type="file" name="image" id="image" required><br><br>
        <label for="categ">Elegir a que categoria debe ir el archivo
          <select id="categ" name="categ">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
          </select>
        </label>
        <input type="submit" value="Cargar PDF">
      </form>
    <br>
      <form>
        <input type="submit" formaction="mostrarpdf.php" value="Ver los pdfs" class="botonazo">
      </form>
      <br>
      <form>
      <input type="submit" formaction="logout.php" value="Desconectar la sesion" class="botonazo">
      </form>
      <br>
      <form>
      <input type="submit" formaction="verpdfCateg1.php" value="Categoria 1" class="botonazo">
      </form>
      <form>
      <input type="submit" formaction="verpdfcateg2.php" value="Categoria 2" class="botonazo">
      </form>
      <form>
      <input type="submit" formaction="verpdfcateg3.php" value="Categoria 3" class="botonazo">
      </form>

</body>
</html>