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

<p>Esto lo hizo Pato</p>


<div class="contenedor-contacto">
 	<form>

 		<div class="nombre-contacto">
	 	<label for="nombre-contacto">Nombre:</label>
		<input id="input1" type="text" name="nombre-contacto" required>
		</div>

		<div class="mail-contacto">
		<label for="mail-contacto">E-Mail:</label>
		<input id="input2" type="email" name="mail-contacto" placeholder=" example@example.com" required>
		</div>

		<div class="asunto-contacto">
	 	<label for="asunto-contacto">Asunto:</label>
		<input id="input3" type="text" name="asunto-contacto">
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
