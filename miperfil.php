<?php
session_start();
include_once("funciones.php");
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

      <h1>Bienvenido <?php echo $nombre; ?>, a tu perfil</h1>
      <h2>Información:</h2>
      <img style="border-radius: 50%; width: 60%;" src="images/avatares/<?php echo $email.'.jpg'; ?>" alt="">

      <ul>
        <li>Nombre completo: <?php echo $nombre; ?></li>
        <li>Email: <?php echo $email; ?></li>
      </ul>
      <a style="background-color: white; font-size:2em; margin: 15px;"href="logout.php">Salir</a>
    </div>

  </body>
</html>
