<?php
  session_start();
  require_once('funciones.php');

  if ($_POST) {
    $errores_login = validarLogin($_POST);

    if (empty($errores_login)) {
      $usuario = comprobarEmail($_POST['email']);
      loguear ($usuario);
      header ('location: miperfil.php');
      exit;

    }
  }
 ?>



<!DOCTYPE html>
<html>
  <?php
  include_once ("includes/head.php");
  ?>
  <body>
    <?php
    include_once ("includes/nav.php");
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container_formulario">
      <form class="formulario" action="" method="post">
        E-mail <input type="text" name="email" value="" placeholder="Ingrese su usuario o email"><br>
        Clave <input type="password" name="pass" value="" placeholder="Ingrese su contraseña"><br>
        <button type="submit" name="button">Enviar</button>
    </form>
    </div>
  </body>
</html>
