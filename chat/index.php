<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Messenger</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombre" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo</label>
          <input type="text" name="email" placeholder="tucorreo@correo.com" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Foto de perfil</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Acceder al Chat">
        </div>
      </form>
      <div class="link">Ya te has registrado? <a href="login.php">Inicia sesión acá</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>