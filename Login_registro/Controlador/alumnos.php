<?php session_start();

if (isset($_SESSION['usuario'])) {
require_once('../Modelo/class.conexion.php');
require_once('../Modelo/class.consultas.php');


$mensaje=null;

//validar con JavaScript

/*$nombre = $_POST['usuario'];
$pass = $_POST['Pass'];*/
if ($_SERVER['REQUEST_METHOD']=='POST') {

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


if (count($Codigo)>0 /*&& count($Nombre)>0*/) {
  $consultas= new Consultas();
  $mensaje = $consultas ->insertarDatos($Codigo,$Nombre,$Apellidos,$FechaNacimiento,$Telefono,$Genero,$Repitente,$Direccion,$Grado,$Seccion,$Encargado,$Edad,$Etnia,$Expediente);

}else {
  echo "Por favor completa los campos";
}
echo $mensaje;
}
require '../views/alumnos.view.php';
//require '../alumnos1.php';
}else {
header('Location: ../intruso.php');}
 ?>
