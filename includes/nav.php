<input type="checkbox" id="abre-nav">
<label for="abre-nav" class="toggle-nav">
  <span class="ion-navicon-round"></span>
</label>
<nav>
  <ul>
    <li>
      <label class="cierra" for="abre-nav">
        <span class="ion-close-circled"></span>
      </label>
      <img src="images/sem.png" alt="">
    </li>
    <li><a href="index.php">Home</a></li>
    <li><a href="faq.php">Preguntas frecuentes</a></li>
    <?php if (isset($_SESSION['userId'])): ?>
    <li><a href="miperfil.php">Mi perfil</a></li>
    <li><a href="logout.php">Salir</a></li>
      <?php else: ?>
        <li><a href="login.php">Log in</a></li>
        <li><a href="registro.php">Registrate</a></li>
    <?php endif; ?>


  </ul>
</nav>
