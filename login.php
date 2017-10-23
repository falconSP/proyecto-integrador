<?php
  session_start();
  require_once('funciones.php');

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324

  if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_me'])) {
    $_SESSION['userId'] = $_COOKIE['remember_me'];
  }



<<<<<<< HEAD
=======
=======
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
  if (isset($_SESSION['userId'])) {
    header ('location: miperfil.php');
  }

  if ($_POST) {
    $errores_login = validarLogin($_POST);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324

    if (empty($errores_login)) {
      $usuario = comprobarEmail($_POST['email']);
      loguear ($usuario);
      if (isset($_POST['recordarme'])) {
        setcookie('remember_me', $usuario['id'], time() + 3600);        // Sets the cookie
        }
<<<<<<< HEAD
=======
=======
    if (empty($errores_login)) {
      $usuario = comprobarEmail($_POST['email']);
      loguear ($usuario);
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
        <input class="input-login1" type="text" name="email" value="" placeholder="Ingrese su e-mail"><br>
        <input class="input-login2" type="password" name="pass" value="" placeholder="Contraseña"><br>
        <input class= "recordar" type="checkbox" name="recordarme" value="recordarme" id="recordarme">
        <label class= "recordar" for="recordarme">Recordarme</label> <br>
<<<<<<< HEAD
=======
=======
        <input class="input-login1" type="text" name="email" value="" placeholder="Email"><br>
        <input class="input-login2" type="password" name="pass" value="" placeholder="Contraseña"><br>
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
        <button class="enviar-login" type="submit" name="button">Enviar</button>
    </form>
    </div>
  </body>
</html>
