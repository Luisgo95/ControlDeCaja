<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../boostrap/estilos.css">
        <link rel="stylesheet" href="../boostrap/fonts/glyphicons-halflings-regular.svg">
    <link rel="stylesheet" href="../boostrap/estilos.css">
    <title></title>
    <h1 class="Title">
      Busqueda por Apellidos
    </h1>
    <h2>
    </h2>
  </head>
  <body>
<form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" action="../Controlador/busqueda.php">
    <br>
    <div class="">
  <label for="">Ingresa el apeliido a Buscar</label>
  <input type="text" name="Apellidos" placeholder="Ingresa los Apellidos">

  <input type="submit" class="btn btn-info" value="Guardar">
    <a href="../contenido.php" class="btn btn-info" role="button">Regresar</a>
  <table class="table table-hover">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Grado</th>
          <th>Seccion</th>
          <th>Accion</th>
        </tr>
      </thead>
      <?php
      require_once('../Modelo/class.conexion.php');
      require_once('../Modelo/class.consultas.php');



      if (!empty($Apellidos))  {

       $consultas= new Consultas();

        $mensaje = $consultas ->DatosRecibosA($Apellidos);

      }else {
      //  echo "<br>";

        //echo "Debes llenar alguno de los campos Habilitados este";
      }

       ?>
  </div>
</form>

  </body>
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
