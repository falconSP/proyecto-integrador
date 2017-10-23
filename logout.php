<?php
  // boton de logout redireccion a index o registro despues de destruir session, falta unset cookie
  session_start();
  session_destroy();
<<<<<<< HEAD
  header("location:index.php");
=======
<<<<<<< HEAD
  header("location:index.php");
=======
  header("location:registro.php");
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
  exit;
?>
