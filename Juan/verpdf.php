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
$stmt = $pdo->prepare('SELECT nombre, filename FROM documents ORDER BY nombre ASC');
$stmt->execute();

// itera a traves de ellos y los muestra como links
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<a href="pdfs/' . $row['filename'] . '" target="_blank">' . $row['nombre'] . ' </a><br>';
    echo '<br>';
}
    ?>