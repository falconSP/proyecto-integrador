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

	  $errores = guardarImagen('perfil', $errores);

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


    <div class="container-formulario">
		   <div class="errores">
			<ul>
			  <?php if (isset($errores)): ?>
				<?php foreach ($errores as $key => $value): ?>
				  <li><?=$value?></li>
				<?php endforeach; ?>
			  <?php endif; ?>
			</ul>
		  </div>
        <div class="registro-r"><h2>REGISTRO</h2></div>
    	<form class="formulario" action="" method="post" enctype="multipart/form-data">

    	<div class="primeros-tres">
    		<div class="registro-cont-nombre">
    	  		<div class="label-nombre-r"><label>Nombre completo:</label></div>
		  		<input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" class="in-nombre-r">
			</div>


			<div class="registro-cont-correo">
				<div class="label-correo-r"><label>Correo Electrónico:</label></div>
		    	<input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>" class="in-correo-r">
			</div>

			<div class="registro-cont-edad">
		  		<div class="label-edad-r"><label>Edad:</label></div>
		  		<input type="number" name="age" value="<?php if(isset($age)){echo $age;} ?>" class="in-edad-r">
			</div>
	   </div>

	  <div class="segundos-tres">
			<div class="registro-cont-pass">
				<div class="label-pass-r"><label>Contraseña:</label></div>
		  		<input type="password" name="pass" class="in-pass-r">
			</div>


			<div class="registro-cont-repass">
		  		<div class="label-repass-r"><label>Repita la Contraseña:</label></div>
		  		<input type="password" class="in-repass-r" name="repass">
			</div>

			<div class="registro-cont-avatar">
		  		<div class="label-avatar-r" class="in-avatar-r"><label>Subi tu avatar:</label></div>
		  		<input id="input-file" type="file" name="perfil" value="">
			</div>
	  </div>

      <button type="submit" class="enviar-r" name="button">ENVIAR</button>
   </form>
 </div>

  </body>
</html>
