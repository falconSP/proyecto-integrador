<!DOCTYPE html>
<html>
<?php
include_once ("includes/head.php");
	
include_once('funciones2.php');
if(!hayConexion()){
  header("location:botones.php");
  exit();
}elseif(Consulta() == false){
  header("location:botones.php");
  exit();
}
	
?>
<body>
  <?php
  include_once ("includes/nav.php");

  ?>
    <div class="r-ok-contenedor">
		<span><i class="ion-happy-outline"></i></span>
			<div class="gracias-r">
				<h1>¡Gracias por registrarte!</h1>	
			</div>    </div>
</body>
</html>
