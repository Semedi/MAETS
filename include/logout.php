<?php
 // require_once __DIR__.'/include/config.php';
  
  session_start();
  // Destruimos la sesión
  session_destroy();
  
  // Redirigimos a la página principal del ejemplo
  header('Location: ../index.php');
?>