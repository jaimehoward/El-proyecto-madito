<?php
  // Conecta a la base de datos
  include 'conn.php';

  // se fija si lo pusiste vacio
  if (empty($_POST['username']) || empty($_POST['password'])) {
    // fallo te manda al signup
    header('Location: signup.html');
    exit;
  }

  // Hashea la contra
  $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Inserta eñ usuario en la bdd
  $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
  $stmt->execute([$_POST['username'], $hashedPassword]);

  // te manda al login
  header('Location: login.html');
?>
