<!DOCTYPE html>
<html>
  <?php
  include_once ("includes/head.php");
  ?>
  <body>

    <?php
    include_once ("includes/nav.php");
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
    <!-- Falta css -->

			<!-- Probando -->
			<!-- container-main-contacto
			aca va a ir todo el container principal -->
			<section class="main-register-container">

				<!-- container login -->
				<section class="main-login-container">
					<h3>Ya tenes una cuenta? Dale Login</h3>
					<article class="userLogin">
						<label for="">Usuario</label>
		      	<input type="text" name="Usuario" required>
					</article>
					<article class="passLogin">
						<label for="">Contraseña</label>
						<input type="password" name="Contraseña" required>
						<input type="checkbox" name="Recordar Contraseña" required>
						<label for="">Recordar Contraseña</label>
						<input id="login-submit" type="submit" name="submit" value="Login">

					</article>
				</section>

				<!-- container registro -->
				<section class="main-register">
					<h3>Aun no tenes cuenta? registrate</h3>
					<article class="nombreRegister">
						<label for="">Nombre</label>
						<input type="text" name="Nombre" placeholder="Nombre" required>
					</article>
					<article class="apellidoRegister">
						<label for="">Apellido</label>
		        <input type="text" name="Apellido" placeholder="Apellido" required>
					</article>
					<article class="birthRegister">
						<label for="">Fecha de nacimiento</label>
						<input type="date" name="fecha" required>
					</article>
					<article class="emailRegister">
						<label for="">E-mail</label>
		        <input type="email" name="E-mail" placeholder="E-mail" required>
					</article>
					<article class="userRegister">
						<label for="">Usuario</label>
		        <input type="text" name="Usuario" placeholder="Usuario" required>
					</article>
					<article class="passRegister">
						<label for="">Contraseña</label>
		        <input type="password" name="Contraseña" placeholder="Contraseña" required>
					</article>
					<article class="passagainRegister">
						<label for=""> Repetir Contraseña</label>
		        <input type="password" name="Repetir Contraseña" placeholder="Repetir Contraseña" required>
					</article>
				</section>

				<section class="terms-conds">
					<article class="">

						<input type="checkbox" name="checkbox" value="check" required> I have read and agree to the Terms and Conditions and Privacy Policy
						<input id="register-submit" type="submit" name="submit" value="Registrarme">
					</article>
				</section>

				</section>

    <?php
    include_once ("includes/footer.php")
     ?>

  </body>
</html>
    <?php
    include_once ("includes/footer.php")
     ?>

  </body>
</html>

