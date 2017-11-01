<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0,maximum-scale=1.0,minumum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
      <!-- vinculacion con bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/estilos.css">

    <title>Iniciar Sesión</title>
  </head>
  <body>
<div class="contenedor">
    <h1 class="titulo">Sotware Xxpro</h1>
    <h1 class="titulo">Login</h1>
    <hr class="border">

<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="formulario" name="login">
<div class="form-group">

    <i class="icono izquierda fa fa-user"></i>
    <input type="text" name="usuario" class="usuario" placeholder="Usuario" >
</div>

<div class="form-group">
    <i class="icono izquierda fa fa-lock"></i>
    <input type="password" name="password" class="password_btn" placeholder="
    Contraseña" >
    <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
</div>

<?php if(!empty($errores)): ?>
  <div ="error">
    <ul>
      <?php echo $errores; ?>
    </ul>
  </div>
<?php endif; ?>

</form>
<p class="texto-resgistrate">
  ¿ Aún no te has registrado?
  <a href="registrate.php">Registrate</a>
</p>


</div>

  </body>
  <footer>
    <h2 class="texto-resgistrate">Derechos Reservados </h2>
    <h2 class="texto-resgistrate">Luis Gómez </h2>

  </footer>
