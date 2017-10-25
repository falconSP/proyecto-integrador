<?php
  // boton de logout redireccion a index o registro despues de destruir session, falta unset cookie
  session_start();
  session_destroy();
  unset($_SESSION['userId']);
    setcookie("remember_me", "", time() - 3600);
  header("location:index.php");
  exit;
?>
