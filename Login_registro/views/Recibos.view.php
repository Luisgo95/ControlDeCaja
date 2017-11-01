<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../boostrap/estilos.css">
    <meta charset="utf-8">
    <title>Recibos</title>
        <!--Javascript-->
    <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>
    <script src="../media/js/bootstrap.js"></script>
    <script src="../media/js/lenguajeusuario.js"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script src="../Controlador/Convertidor.js" type="text/javascript" ></script>
  </head>
  <header>
    <div class="contenedor">
      <h1>Software XxPro</h1>
      <h2>Creacion de Recibos</h2>
    </div>
  </header>
  <br>
  <br>
  <body>
<div class="container">
  <div align= "center" class="container">
    <i>
  <h3>Liceo Privado de Ciencias Comerciales</h3>
  <h3>Huehuetenango 77640126</h3>
  <h3>Plan Diario</h3>
  <h3>Luis Gómez</h3>
  </i>
  </div>
    <div id="Mostrar" class="" >
      <div class="container  ">
        <section class="main row">
            <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" action="../Controlador/recibo.php">
          <div class="col-xs-5 col-sm- 5 col-md-5">
            <div class="input-group">
              <span class="input-group-addon" id="txtcodigo">Codigo</span>
               <input type="text" name="Codigo" class="form-control" placeholder="Codigo" aria-describedby="basic-addon1" value="<?php echo $v= $_GET['a'];?>">
              <span class="input-group-addon" id="txtpor">Por</span>
              <input id="demo3" type="number" name="Por" class="form-control" placeholder="Por" aria-describedby="basic-addon1">
           </div>
            <br>
         <div class="input-group">
           <span class="input-group-addon" id="txtrecibi">Recibi De:</span>
           <input type="text" name="Recibi" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1"value="<?php
           $v= $_GET['b'];
           $x= $_GET['c'];
           $y= $v.$x;
           echo $v." ".$x;
           ?>">
         </div>
          <br>
           <div class="input-group">
              <span class="input-group-addon" id="txtnombre">Por concepto de:</span>
              <input   type="text" name="concepto" class="form-control" placeholder="Por concepto de:" aria-describedby="basic-addon1"required>
         </div>
            <br>
           <div class="input-group">
                <span class="input-group-addon" id="txtcantidad">La Cantidad De:</span>
                <input id="demo_out3" type="text"  name="cantidad"class="form-control" placeholder="Descripcion en letras" aria-describedby="basic-addon1"required value=" ">
                 <script>
                    onload = function () {
                      var e = document.getElementById('demo3');
                      e.oninput = myHandler;
                      e.onpropertychange = e.oninput;
                      function myHandler(){
                         document.getElementById('demo_out3').value = e.value.tonumero();
                        }
                      };
              </script>
           </div>
            <br>
                <div class="input-group">
                <span class="input-group-addon" id="txtfecha">Fecha</span>
                <input type="date" name="Fecha" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1"required  value="<?php echo date("Y-m-d");?>">
             </div>
          <br>
      </div>
<!-- se aplican margenes para las columnas-->
      <div class="col-xs-12 col-sm8 col-md-5">
                  <div class="input-group">
            <span class="input-group-addon" id="txtgrados">Grado</span>
              <input class="form-control" list="browsers" name="grados" placeholder="Grado"required value="<?php echo $v= $_GET['d'];?>">
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
              <input type="text" name="seccion" class="form-control" placeholder="Sección" aria-describedby="basic-addon1"required value="<?php echo $v= $_GET['e'];?>">
          </div>
          <br>
            <div class="input-group">
                <span class="input-group-addon" id="txtMes">Mes</span>
                <input  class="form-control" list="browser" name="Mes" placeholder="Mes" required>
                <datalist  id="browser">
                  <?php
                      $nombre='Meses';
                      $resultado=lista($nombre,$Meses);
                      echo $resultado;
                      ?>
                </datalist>
              </datalist>
          </div>
          <br>
          <div class="input-group">
              <span class="input-group-addon" id="txtidrecibo">Recibo No</span>
              <input type="text" name="ReciboNum" class="form-control" placeholder="Recibo No" aria-describedby="basic-addon1"required>
          </div>
          <br>
          <div class="btn-group btn-group-lg">
                <input type="submit" class="btn btn-info" value="Guardar">
                  <a href="../contenido.php" class="btn btn-info" role="button">Regresar</a>
          </div>
        </div>
      </form>
        </div>
      </section>
      </div>
    </div>

</div>

  </body>
</html>
