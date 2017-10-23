<?php
session_start();
include_once("funciones.php");
<<<<<<< HEAD
if (!isset($_SESSION[userId])) {
  header("location:index.php");
}
=======
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
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

    <div class="container_perfil">

      <?php
        $usuarios= traerTodos();
        foreach ($usuarios as $key => $value) {
          if ($_SESSION['userId'] == $value['id']) {
            $nombre = $value['name'];
            $email= $value['email'];
          }
        }
      ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
      <h2 class="titulo-perfil">¡Bienvenido a tu perfil!</h2>
      <h1 class="nombre-perfil"><?php echo $nombre; ?></h1>

      <div class="info-perfil">
      	<img class="img-perfil" src="images/avatares/<?php echo $email.'.jpg'; ?>" alt="">

      	<div class="nombre-email-perfil">
      	<h2 style="text-transform: uppercase;">Información:</h2>
			<ul>
				<li>Nombre completo: <?php echo $nombre; ?></li>
				<li>Email: <?php echo $email; ?></li>
			</ul>
        </div>
      </div>

      <a class="boton-salir-login" href="logout.php">Salir</a>

<<<<<<< HEAD
=======
=======
      <h1>Bienvenido <?php echo $nombre; ?>, a tu perfil</h1>
      <h2>Información:</h2>
      <img style="border-radius: 50%; width: 60%;" src="images/avatares/<?php echo $email.'.jpg'; ?>" alt="">

      <ul>
        <li>Nombre completo: <?php echo $nombre; ?></li>
        <li>Email: <?php echo $email; ?></li>
      </ul>
      <a style="background-color: white; font-size:2em; margin: 15px;"href="logout.php">Salir</a>
>>>>>>> cc4366908cf6cf5c2ab784ae4f3d4876740ed375
>>>>>>> 3e28eeca67d0485588798d6eaaf0955668e29324
    </div>

  </body>
</html>
