<?php
  // Conecta a la bdd
  include 'conn.php';

  // Valida que hayas puesto algo
  if (empty($_POST['username']) || empty($_POST['password'])) {
    // Falla te manda de vuelta al login
    header('Location: login.html');
    exit;
  }

  //Busca el usuario comparando con lo ingresado
  $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
  $stmt->execute([$_POST['username']]);
  $user = $stmt->fetch();

  // se fija si la contraseña esta bien
  if ($user && password_verify($_POST['password'], $user['password'])) {
    // ingresaste joya
    session_start();
    $_SESSION['user'] = $user;
    header('Location: index.php');
    exit;
  } else {
    // Lfallo el login te manda de vuelta al login
    header('Location: login.html');
    exit;
  }
?>