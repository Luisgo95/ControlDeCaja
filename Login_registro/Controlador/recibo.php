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
$Por = filter_var(strtolower($_POST['Por']),FILTER_SANITIZE_STRING);

$Nombre = filter_var(strtolower($_POST['b']), FILTER_SANITIZE_STRING);
$Apellidos =filter_var(strtolower( $_POST['c']), FILTER_SANITIZE_STRING);


$Concepto = filter_var(strtolower($_POST['concepto']), FILTER_SANITIZE_STRING);
$Cantidad= filter_var(strtolower($_POST['cantidad']), FILTER_SANITIZE_STRING);

$Fecha=$_POST['Fecha'];
$Grado = filter_var(strtolower($_POST['grados']), FILTER_SANITIZE_STRING);
$Seccion = filter_var(strtolower($_POST['seccion']), FILTER_SANITIZE_STRING);


$Mes = filter_var(strtolower($_POST['Mes']), FILTER_SANITIZE_STRING);
$ReciboNum = filter_var(strtolower($_POST['ReciboNum']), FILTER_SANITIZE_STRING);



if (count($Codigo)>0 /*&& count($Nombre)>0*/) {
  $consultas= new Consultas();
  $mensaje = $consultas ->insertarDatosR($Codigo,$Por,$Nombre,$Apellidos,$Concepto,$Cantidad,$Fecha,$Grado,$Seccion,$Mes,$ReciboNum);

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
