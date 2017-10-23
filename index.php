<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <?php
  include_once ("includes/head.php");
  ?>
  <body>
  <header class="main-header">

  <div class="fake-bg"></div>

  <?php
  include_once ("includes/nav.php");
  ?>


    <h1>Digital Focus</h1>
    <h3>Nos encargamos de que sus ideas se conviertan en casos de éxito respetando los mejores estandares y con el mejor personal</h3>
    <a class='boton-contacto' href="index.php#ancla_contacto">Contactate con nosotros!</a>
  </header>

  <section class="container">

    <h2>Nuestros Servicios</h2>

    <article class="servicio">
      <img src="images/ecommerce.jpg" alt="">
      <h3>Marcas que venden</h3>
      <p>El comercio online se ha transformado en clave para las empresas, fundamentalmente por la facilidad que brinda tanto en mantenimiento e infraestructura, ya sea una pequeña o gran empresa. Realizamos el desarrollo customizado a las necesidades de cada cliente, tanto esteticas como funcionales.</p>
    </article>

    <article class="servicio">
      <img src="images/institucional2.png" alt="">
      <h3>Sitio institucional</h3>
      <p>Un sitio web representa a una empresa a nivel global, y es fundamental que la imágen de la empresa esté representada acordemente, estéticamente, funcionalmente y tecnológicamente, teniendo un fuerte impacto visual y una clara navegabilidad.</p>
    </article>

    <article class="servicio">
      <img src="images/hosting.png" alt="">
      <h3>Hosting</h3>
      <p>No te preocupes por contratar el hosting, nosotros mismos podemos hacerlo por vos! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vennsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
    </article>

    <article class="servicio">
      <img src="images/mantenimiento.png" alt="">
      <h3>Mantenimiento</h3>
      <p>El seguimiento y mantenimiento de un sitio web puede responder a varias necesidades, ya sea para estar actualizado tecnológicamente, para mostrar una imágen confiable con un sitio web dinamico, para realizar diversas tareas de diseño y marketing, para mejorar el posicionamiento orgánico o para ofrecer nuevos productos a los clientes. </p>
    </article>

    <article class="servicio">
      <img src="images/sem.png" alt="">
      <h3>Publicidad Online</h3>
      <p>Ya sea por una necesidad de buscar un mayor rendimiento de la campaña o buscando nuevas estrategias de expansión, muchas veces se requiere una campaña de publicidad online, ya sea en redes sociales o motores de búsqueda o ambos. Realizamos el desarrollo de la campaña y su mantenimiento ajustando la misma para enfocarnos en el objetivo y maximimar los resultados.</p>
    </article>
  </section>


<!-- A partir de aca empieza el contacto  -->
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
<<<<<<< HEAD
  			header('location: index.php'); exit;
=======
  			header('location: fin-contacto.php'); exit;
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
  		}
  }

  ?>
<<<<<<< HEAD
  <a name="ancla_contacto"></a>
  <div class="contenedor-contacto">
   <h1 class="titulo-contacto">CONTACTANOS</h1>
=======
<<<<<<< HEAD
  <a name="ancla_contacto"></a>
  <div class="contenedor-contacto">
   <h1 class="titulo-contacto">CONTACTANOS</h1>
=======
  <div class="contenedor-contacto">
   <h1 class="titulo-contacto">CONTACTANOS</h1>
    <a name="ancla_contacto"></a>
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
   	<form action="index.php#ancla_contacto" method="post">

   		<div class="nombre-contacto">
<!--  	 	<label for="nombre-contacto">Nombre Completo:</label>-->
  		<input id="input1" type="text" name="nombreContacto" value="<?=$nombreContacto;?>" placeholder="Nombre Completo">
  		<?php if (isset($erroresFinales['nombreContacto'])): ?>
  				<span><i class="ion-ios-close"></i></span>
  				<span><?=$erroresFinales['nombreContacto'];?></span>
  		<?php endif; ?>
  		</div>

  		<div class="mail-contacto">
<!--  		<label for="mail-contacto">Correo Electrónico:</label>-->
  		<input id="input2" type="email" name="mailContacto" value="<?=$mailContacto;?>" placeholder="Correo Electrónico">
  		<?php if (isset($erroresFinales['mailContacto'])): ?>
  				<span><i class="ion-ios-close"></i></span>
  				<span><?=$erroresFinales['mailContacto'];?></span>
  		<?php endif; ?>
  		</div>

  		<div class="asunto-contacto">
<!--  	 	<label for="asunto-contacto">Asunto:</label>-->
  		<input id="input3" type="text" name="asuntoContacto" value="<?=$asuntoContacto;?>" placeholder="Asunto del Mensaje">
  		<?php if (isset($erroresFinales['asuntoContacto'])): ?>
  				<span><i class="ion-ios-close"></i></span>
  				<span><?=$erroresFinales['asuntoContacto'];?></span>
  		<?php endif; ?>
  		</div>

  		<div class="mensaje-contacto">
<!--  		<label for="mensaje-contacto">Tu mensaje:</label><br>-->
  		<textarea id="input4" name="mensaje-contacto" placeholder="Dejanos tu mensaje.."></textarea>
  		</div>

  		<div class="enviar-contacto">
  		<button type="submit" id="input5">ENVIAR</button>
<!--  		<input id="input5" type="submit">-->
  		</div>

  	</form>

  </div>
<?php
include_once ("includes/footer.php")
 ?>


  </body>
</html>
