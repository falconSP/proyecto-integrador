<?php
session_start();
<<<<<<< HEAD
include_once("funciones.php");
=======
<<<<<<< HEAD
include_once("funciones.php");
=======

>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
 ?>

<!DOCTYPE html>
<html>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
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
<<<<<<< HEAD
=======
=======
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <h1>Bienvenido a tu perfil</h1>
      <h2>Aca tendras toda tu informacion privada</h2>
>>>>>>> 6d81372422fa2fed15af7ddd68f320ac1e46549c
>>>>>>> 013ff666f45a1c9f68d55531a173f5a34a967062
    </div>

  </body>
</html>
