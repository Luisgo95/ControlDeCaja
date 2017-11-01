<?php //session_start();


//adaptar segun el login.PHP
//if (isset($_SESSION['usuario'])) {
  //header('Location: index.php');
//}

/*
if ($_SERVER['REQUEST_METHOD']=='POST') {

    //$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    /**  $Codigo = filter_var(strtolower($_POST['Codigo']), FILTER_SANITIZE_STRING);
      $Nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
      $Apellidos =filter_var(strtolower( $_POST['apellidos']), FILTER_SANITIZE_STRING);
      $FechaNacimiento = $_POST['FechaNacimiento'];
      $Telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING);
      $Genero = filter_var(strtolower($_POST['genero']), FILTER_SANITIZE_STRING);
      $Repitente=filter_var(strtolower($_POST['repitente']), FILTER_SANITIZE_STRING);
      $Direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
      $Grado = filter_var(strtolower($_POST['grados']), FILTER_SANITIZE_STRING);
      $Seccion = filter_var(strtolower($_POST['seccion']), FILTER_SANITIZE_STRING);
      $Encargado = filter_var(strtolower($_POST['encargado']), FILTER_SANITIZE_STRING);
      $Edad = filter_var(strtolower($_POST['edad']), FILTER_SANITIZE_STRING);
      $Etnia = filter_var(strtolower($_POST['etnia']), FILTER_SANITIZE_STRING);
      $Expediente =filter_var(strtolower( $_POST['expediente']), FILTER_SANITIZE_STRING);*/
/*
      $Codigo = filter_var(strtolower($_POST['Codigo']), FILTER_SANITIZE_STRING);
      $Nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
      $Apellidos =filter_var(strtolower( $_POST['apellidos']), FILTER_SANITIZE_STRING);
      $FechaNacimiento = $_POST['FechaNacimiento'];
      $Telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING);
      $Genero = filter_var(strtolower($_POST['genero']), FILTER_SANITIZE_STRING);
      $Repitente=filter_var(strtolower($_POST['repitente']), FILTER_SANITIZE_STRING);
      $Direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
      $Grado = filter_var(strtolower($_POST['grados']), FILTER_SANITIZE_STRING);
      $Seccion = filter_var(strtolower($_POST['seccion']), FILTER_SANITIZE_STRING);
      $Encargado = filter_var(strtolower($_POST['encargado']), FILTER_SANITIZE_STRING);
      $Edad = filter_var(strtolower($_POST['edad']), FILTER_SANITIZE_STRING);
      $Etnia = filter_var(strtolower($_POST['etnia']), FILTER_SANITIZE_STRING);
      $Expediente =filter_var(strtolower( $_POST['expediente']), FILTER_SANITIZE_STRING);
      $errores='';*/
/*
      if (empty($Codigo)or empty($Nombre)or empty($Apellidos)or empty($FechaNacimiento)or empty($Telefono)or empty($Direccion)or empty($Grado)) {
        $errores.='<li>Uno o más campos estan vacios llena los datos correctamente</li>';
        echo "Error".$errores;
      }else{
        try {
            //$conexion = new PDO('mysql:host=localhost;dbname=login_practica','root','');



            echo "Conexion Realizada";
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
      }/*
  if($errores =='') {
     $sentencia = $conexion->prepare("INSERT INTO
     alumnos(Codigo,Nombre,Apellidos,FechaNacimiento,Telefono,Genero,Repitente,Direccion,Grado,Seccion,Encargado,Edad,Etnia,ExpedienteCompleto)
     VALUES (:Codigo,:Nombre,:Apellidos,:Fecha,:Telefono,:Genero,:Repitente,:Direccion,:Grado,:Seccion,:Encargado,:Edad,:Etnia,:Expediente)");

      $sentencia->bindParam(':Codigo', $Codigo);
      $sentencia->bindParam(':Nombre', $Nombre);
      $sentencia->bindParam(':Apellidos', $Apellidos);
      $sentencia->bindParam(':Fecha', $FechaNacimiento);
      $sentencia->bindParam(':Telefono', $Telefono);
      $sentencia->bindParam(':Genero', $Genero);
      $sentencia->bindParam(':Repitente', $Repitente);
      $sentencia->bindParam(':Direccion', $Direccion);
      $sentencia->bindParam(':Grado', $Grado);
      $sentencia->bindParam(':Seccion', $Seccion);
      $sentencia->bindParam(':Encargado', $Encargado);
      $sentencia->bindParam(':Edad', $Edad);
      $sentencia->bindParam(':Etnia', $Etnia);
      $sentencia->bindParam(':Expediente', $Expediente);

      $sentencia-> execute();


      echo "Hola desde Consulta Execute";

    }*/


require 'views/alumnos.view.php';
 ?>
