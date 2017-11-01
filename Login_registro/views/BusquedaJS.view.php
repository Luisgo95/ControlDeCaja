
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Busqueda de alumnos</title>
    <!--CSS-->
    <link rel="stylesheet" href="../media/css/bootstrap.css">
    <link rel="stylesheet" href="../media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../media/font-awesome/css/font-awesome.css">
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
</head>

<body>
<div class="col-md-8 col-md-offset-2">
    <h1>Busqueda de alumnos
        <a href="registrousuario.php" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo usuario</a>
        <a href="../contenido.php"class="btn btn-primary pull-right menu"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Regresar</a>
    </h1>
</div>
<div class="col-md-8 col-md-offset-2">
    <table id ="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Grado</th>
            <th>seccion</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Grado</th>
          <th>seccion</th>
          <th>Accion</th>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
