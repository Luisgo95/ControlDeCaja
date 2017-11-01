<?php session_start();

if (isset($_SESSION['usuario'])) {



require_once('../Modelo/class.conexion.php');
require_once('../Modelo/class.consultas.php');

$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {

//$Codigo = filter_var(strtolower($_POST['Codigo']), FILTER_SANITIZE_STRING);
$Apellidos = filter_var(strtolower($_POST['Apellidos']), FILTER_SANITIZE_STRING);
//if (count($Codigo)>0 /*&& count($Nombre)>0) {

//  $consultas= new Consultas();
//  $mensaje = $consultas ->DatosRecibos($Codigo);

//}else {
//  echo "Por favor completa los camposq";
//}
if (!empty($Apellidos)) /*&& count($Nombre)>0)*/ {

 //$consultas= new Consultas();

  //$mensaje = $consultas ->DatosRecibosA($Apellidos);

}else {
    echo "Debes llenar alguno de los campos Habilitados aqui";
}
}
require '../views/busqueda.view.php';
}else {
header('Location: ../intruso.php');}
 ?>
