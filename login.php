<?php
  session_start();
  require_once('funciones.php');


  if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_me'])) {
    $_SESSION['userId'] = $_COOKIE['remember_me'];
  }



  if (isset($_SESSION['userId'])) {
    header ('location: miperfil.php');
  }

  if ($_POST) {
    $errores_login = validarLogin($_POST);


    if (empty($errores_login)) {
      $usuario = comprobarEmail($_POST['email']);
      loguear ($usuario);
      if (isset($_POST['recordarme'])) {
        setcookie('remember_me', $usuario['id'], time() + 3600);        // Sets the cookie
        }
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
    <div class="container-login">
     <div class="login-titulo"><h2>LOGIN</h2></div>
      <form class="formulario" action="" method="post">
        <input class="input-login1" type="text" name="email" value="" placeholder="Ingrese su e-mail"><br>
        <input class="input-login2" type="password" name="pass" value="" placeholder="Contraseña"><br>
        <input class= "recordar" type="checkbox" name="recordarme" value="recordarme" id="recordarme">
        <label class= "recordar" for="recordarme">Recordarme</label> <br>
        <button class="enviar-login" type="submit" name="button">Enviar</button>
    </form>
    </div>
  </body>
</html>
