<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
session_start();
if (isset($_SESSION['userId'])) {
  header ('location: miperfil.php');
}
<<<<<<< HEAD
=======
=======

>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
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

<<<<<<< HEAD
	if (empty($errores)) {

	  $errores= guardarImagen('perfil', $errores);
=======
<<<<<<< HEAD
	if (empty($errores)) {

	  $errores= guardarImagen('perfil', $errores);
=======
<<<<<<< HEAD
	if (empty($errores)) {

	  $errores = guardarImagen('perfil', $errores);
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062

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

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======

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
>>>>>>> cb4a635514d9aade066d6b1b04f1236e9b97993d
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062

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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062


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
<<<<<<< HEAD

    	<div class="primeros-tres">
    		<div class="registro-cont-nombre">
    	  		<div class="label-nombre-r"><label>Nombre completo:</label></div>
		  		<input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" class="in-nombre-r">
			</div>

=======
<<<<<<< HEAD

    	<div class="primeros-tres">
    		<div class="registro-cont-nombre">
    	  		<div class="label-nombre-r"><label>Nombre completo:</label></div>
		  		<input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" class="in-nombre-r">
			</div>

=======

    	<div class="primeros-tres">
    		<div class="registro-cont-nombre">
    	  		<div class="label-nombre-r"><label>Nombre completo:</label></div>
		  		<input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" class="in-nombre-r">
			</div>

>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
>>>>>>> cb4a635514d9aade066d6b1b04f1236e9b97993d
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062

  </body>
</html>
