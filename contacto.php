<?php 

	require_once('funciones.php');

	$nombreContacto = '';
	$mailContacto = '';
	$asuntoContacto = '';

if ($_POST) {

		// Persistencia
		$nombreContacto = $_POST['nombreContacto'];
		$mailContacto = $_POST['mailContacto'];
		$asuntoContacto = $_POST['asuntoContacto'];
		// Validación - La función validarUsuario retorna un array
		$erroresFinales = validarContacto($_POST);
	
		if (empty($erroresFinales)) {
			// tengo que mandar el mensaje - Averiguar como se hace
			header('location: fin-contacto.php'); exit;
		}
}


include_once('funciones2.php');
if(!hayConexion()){
  header("location:botones.php");
  exit();
}
?>

<!doctype html>
<html>
<?php
	include_once ("includes/head.php");
?>
<body>

<?php
	include_once ("includes/nav.php");
?>

<section class="titulo-contacto">
	<h1 style="black" class="contacto">- Contacto -</h1>
</section>


<div class="contenedor-contacto">
 	<form action="" method="post">

 		<div class="nombre-contacto">
	 	<label for="nombre-contacto">Nombre Completo:</label>
		<input id="input1" type="text" name="nombreContacto" value="<?=$nombreContacto;?>">
		<?php if (isset($erroresFinales['nombreContacto'])): ?>
				<span><i class="ion-ios-close"></i></span>
				<span><?=$erroresFinales['nombreContacto'];?></span>
		<?php endif; ?>
		</div>

		<div class="mail-contacto">
		<label for="mail-contacto">Correo Electrónico:</label>
		<input id="input2" type="email" name="mailContacto" value="<?=$mailContacto;?>" placeholder=" example@example.com">
		<?php if (isset($erroresFinales['mailContacto'])): ?>
				<span><i class="ion-ios-close"></i></span>
				<span><?=$erroresFinales['mailContacto'];?></span>
		<?php endif; ?>
		</div>

		<div class="asunto-contacto">
	 	<label for="asunto-contacto">Asunto:</label>
		<input id="input3" type="text" name="asuntoContacto" value="<?=$asuntoContacto;?>">
		<?php if (isset($erroresFinales['asuntoContacto'])): ?>
				<span><i class="ion-ios-close"></i></span>
				<span><?=$erroresFinales['asuntoContacto'];?></span>
		<?php endif; ?>
		</div>

		<div class="mensaje-contacto">
		<label for="mensaje-contacto">Tu mensaje:</label><br>
		<textarea name="mensaje-contacto"></textarea>
		</div>

		<div class="enviar-contacto">
		<input id="input4" type="submit">
		</div>

	</form>

</div>
<?php
include_once ("includes/footer.php")
 ?>
</body>
</html>
