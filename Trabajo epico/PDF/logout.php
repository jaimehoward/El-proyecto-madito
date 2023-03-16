<?php
  // inicia la sesion
  session_start();

  // Destruye  la sesion
  session_destroy();

  // te manda al login (por ahora)
  header('Location: login.php');
  exit;
?>