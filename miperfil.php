<?php
//session_start();
//include_once("funciones.php");
require_once('soporte.php');
if (!isset($_SESSION["userId"])) {
  header("location:index.php");
}

include_once('funciones2.php');
if(!hayConexion()){
  header("location:botones.php");
  exit();
}elseif(Consulta() == false){
  header("location:botones.php");
  exit();
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

    <div class="container_perfil">

      <?php
        $usuarios = $db->traerTodos();
        foreach ($usuarios as $key => $value) {
          if ($_SESSION['userId'] == $value->getId()) {
            $nombre = $value->getName();
            $email= $value->getEmail();
          }
        }
      ?>

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

    </div>

  </body>
</html>
