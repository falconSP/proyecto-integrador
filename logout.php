<?php
  // boton de logout redireccion a index o registro despues de destruir session, falta unset cookie
  session_start();
  session_destroy();
  header("location:registro.php");
  exit;
?>
