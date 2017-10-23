<?php
  // boton de logout redireccion a index o registro despues de destruir session, falta unset cookie
  session_start();
  session_destroy();
<<<<<<< HEAD
  unset($_SESSION['userId']);
    setcookie("remember_me", "", time() - 3600);
=======
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
  header("location:index.php");
  exit;
?>
