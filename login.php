<?php
  session_start();
  require_once('funciones.php');

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
  if (isset($_SESSION['userId'])) {
    header ('location: miperfil.php');
  }

<<<<<<< HEAD
=======
=======
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
  if ($_POST) {
    $errores_login = validarLogin($_POST);

    if (empty($errores_login)) {
      $usuario = comprobarEmail($_POST['email']);
      loguear ($usuario);
      header ('location: miperfil.php');
      exit;

<<<<<<< HEAD
    }else {
      echo "Incorrecto";
=======
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
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
<<<<<<< HEAD
    <div class="container-login">
     <div class="login-titulo"><h2>LOGIN</h2></div>
      <form class="formulario" action="" method="post">
        <input class="input-login1" type="text" name="email" value="" placeholder="Email"><br>
        <input class="input-login2" type="password" name="pass" value="" placeholder="Contraseña"><br>
        <button class="enviar-login" type="submit" name="button">Enviar</button>
=======
<<<<<<< HEAD
    <div class="container-login">
     <div class="login-titulo"><h2>LOGIN</h2></div>
      <form class="formulario" action="" method="post">
        <input class="input-login1" type="text" name="email" value="" placeholder="Usuario o Email"><br>
        <input class="input-login2" type="password" name="pass" value="" placeholder="Contraseña"><br>
        <button class="enviar-login" type="submit" name="button">Enviar</button>
=======
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container_formulario">
      <form class="formulario" action="" method="post">
        E-mail <input type="text" name="email" value="" placeholder="Ingrese su usuario o email"><br>
        Clave <input type="password" name="pass" value="" placeholder="Ingrese su contraseña"><br>
        <button type="submit" name="button">Enviar</button>
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
    </form>
    </div>
  </body>
</html>
