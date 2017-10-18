<?php

require_once ('funciones.php');
$name = "";
$email = "";
$age="";


if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];

  $errores = [];
  if ($_POST['name']=='') {
    $errores['name'] = 'Por favor, ingresa tu nombre.';
  }
  if ($_POST['email']=='') {
    $errores['email'] = 'Por favor, ingresa tu e-mail.';
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = 'Ingresa un e-mail valido';
  }
  if ($_POST['age']=='') {
    $errores['age'] = 'Por favor, ingresa tu edad.';
  }
  if ($_POST['pass']=='') {
    $errores['pass'] = 'Por favor, ingresa una contraseña.';
  }
  if ($_POST['repass']=='') {
    $errores['repass'] = 'Por favor, repetí la contraseña.';
  } elseif ($_POST['pass'] != $_POST['repass']) {
    $errores['repass'] = 'Las contraseñas deben ser iguales.';
  }


if (empty($errores)) {
  $usuarioFinal = [
    'id' => generarId(),
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'age' => $_POST['age'],
    'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT)
  ];

  $usuarioFinal = json_encode($usuarioFinal);
  file_put_contents('usuarios.json', $usuarioFinal . PHP_EOL, FILE_APPEND);

  header('location: register_ok.php'); exit;
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

      <div class="errores">
        <ul>

          <?php if (isset($errores)): ?>
            <?php foreach ($errores as $key => $value) {
              echo '<li>'. $value .'</li>' ;
            }?>
          <?php endif; ?>
        </ul>

      </div>
      <div class="container_formulario">
        <!-- agrego enctype multiform para probar si anda file upload -->
        <form class="formulario" action="" method="post" enctype="multipart/form-data">
          Nombre completo <input type="text" name="name" value="<?php if(isset($name)){echo $name;} ?>"><br>
          E-mail <input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>"><br>
          Edad <input type="number" name="age" value="<?php if(isset($age)){echo $age;} ?>"><br>
          Contraseña <input type="password" name="pass" value="" placeholder="Escriba su contaseña"><br>
          Repita la contraseña <input type="password" name="repass" value="" placeholder="Vuelva a escribir la contraseña"><br>
          Subi tu imagen <input type="file" name="perfil" value=""><br>
          <button type="submit" name="button">Enviar</button>
        </form>
    </div>

  </body>
</html>
