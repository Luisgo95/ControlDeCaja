<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <!-- vinculacion con bootstrap -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../boostrap/estilos.css">
  <link rel="stylesheet" href="../boostrap/estilos.css">
    <title>Inscripcion</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Inscripción de Alumnos</h1>
      </div>
    </header>
    <br>
    <br>
<div class="container  ">
  <section class="main row">
  <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" action="../Controlador/alumnos.php">


    <div class="col-xs-5 col-sm- 5 col-md-5">
          <div class="input-group">
              <span class="input-group-addon" id="txtcodigo">Codigo</span>
              <input type="text" name="Codigo" class="form-control" placeholder="Codigo" aria-describedby="basic-addon1" required>
        </div>
        <br>
      <div class="input-group">
            <span class="input-group-addon" id="txtnombre">Nombre</span>
            <input type="text" name="nombre"class="form-control" placeholder="Nombre" aria-describedby="basic-addon1"required>
    </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon" id="txtapellidos">Apellidos</span>
          <input type="text"  name="apellidos"class="form-control" placeholder="Apellidos" aria-describedby="basic-addon1"required>
      </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon" id="txtfenacimiento">Fecha de Nacimiento</span>
          <input type="date" name="FechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento" aria-describedby="basic-addon1"required>
        </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon" id="txttelefono">Telefono</span>
          <input type="tel"  name="telefono"class="form-control" placeholder="Telefono" aria-describedby="basic-addon1"required>
      </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon" id="txtgenero">Género</span>
          <input type="text" name="genero"class="form-control" placeholder="Género" aria-describedby="basic-addon1"required>
      </div>
        <br>
      <div class="input-group">
          <span class="input-group-addon" id="txtrepitente">Repitente</span>
          <input type="text" name="repitente" class="form-control" placeholder="Repitente" aria-describedby="basic-addon1"required>
      </div>
</div>
<!-- se aplican margenes para las columnas-->
<div class="col-xs-12 col-sm8 col-md-5">
    <div class="input-group">
        <span class="input-group-addon" id="txtdireccion">Dirección</span>

        <input type="text" name="direccion"class="form-control" placeholder="Dirección" aria-describedby="basic-addon1"required>

    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon" id="txtgrados">Grados</span>
        <input class="form-control" list="browsers" name="grados" placeholder="Grados"required >
        <datalist  id="browsers">
          <?php
              require'../Carreras/Carreras.php';
              $nombre='Carreras';
              $resultado=lista($nombre,$Carreras);
              echo $resultado;
              ?>
        </datalist>
  </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="txtsección">Sección</span>
        <input type="text" name="seccion" class="form-control" placeholder="Sección" aria-describedby="basic-addon1"required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="txtencargado">Encargado</span>
        <input type="text" name="encargado"class="form-control" placeholder="Encargado" aria-describedby="basic-addon1"required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="txtedad">Edad</span>
        <input type="number" name="edad" step="1" min="1" max="100" class="form-control" placeholder="Edad del alumno" aria-describedby="basic-addon1"required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="txtetnia">Etnia</span>
        <input  class="form-control" list="browser" name="etnia" placeholder="Etnia" required>
        <datalist  id="browser">
          <?php
              $nombre='Etnias';
              $resultado=lista($nombre,$Etnias);
              echo $resultado;
              ?>
        </datalist>

    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="txtexpediente">Expediente Completo</span>
        <input type="text" name="expediente" class="form-control" placeholder="Expediente Completo" aria-describedby="basic-addon1"required>
    </div>
    <br>
    <br>
    <div >
          <input type="submit"  class="btn btn-primary" role="button" value="Inscribir"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>

        <a href="../contenido.php" class="btn btn-primary" role="button">Regresar</a>
    </div>

</form>
  </div>

</section>
</div>


<br>
<br>
<!--vinculacion de jquery de bootstrap-->
  </body>
  <script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <footer>
    <div class="container">
        <h3>created by: Luis Gómez</h3>
    </div>
  </footer>
</html>
