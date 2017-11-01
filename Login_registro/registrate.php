<?php session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

  //  echo "$usuario.$password.$password2";

    $errores = '' ;

    if (empty($usuario)or empty($password)or empty($password2)) {
      $errores.='<li>Por favor rellena todos los datos correctamente</li>';
    }else{
      try {
          $conexion = new PDO('mysql:host=localhost;dbname=loginpractica','root','');
          //echo "Conexion Realizada";
      } catch (PDOException $e) {
          echo "Error: ".$e->getMessage();

      }
      //estamos viendo si si existe el usuario
      $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
      $statement -> execute(array(':usuario' => $usuario));
      //va a guardar el registro repetido o false
      $resultado = $statement -> fetch();
      //imprimimos el reultado de la consulta
    //  print_r($resultado);

      if($resultado!=false){
        $errores .= '<li>El usuario ya existe en la base de datos</li>';
      }
        //encriptamos las contraseñas

          $password= hash('sha512',$password);
          $password2= hash('sha512',$password2);
          //echo "$usuario.$password.$password2";
          if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden VERIFICALAS</li>';
            }
    }

if ($errores == '') {
  $statement = $conexion -> prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
  $statement -> execute(array(
    ':usuario' => $usuario,
    ':pass' => $password));


  header('Location: login.php');
}

}
require 'views/registrate.view.php';
 ?>
