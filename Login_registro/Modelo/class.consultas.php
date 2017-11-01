<?php

/**
 *
 */
class Consultas
{

  public function insertarDatos($Codigo,$Nombre,$Apellidos,$FechaNacimiento,$Telefono,$Genero,$Repitente,$Direccion,$Grado,$Seccion,$Encargado,$Edad,$Etnia,$Expediente)
  {
  /*  $modelo= new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="insert into usuario (NombreIngreso,pass) values(:usuario,:pass)";
    $statement= $conexion->prepare($sql);
    $statement->bindParam(':usuario',$usuario);
    $statement->bindParam(':pass',$pass);*/

    $modelo= new Conexion();
    $conexion=$modelo->get_conexion();

    $sql = "insert into alumnos(Codigo,Nombre,Apellidos,FechaNacimiento,Telefono,Genero,Repitente,Direccion,Grado,Seccion,Encargado,Edad,Etnia,ExpedienteCompleto)
    values(:Codigo,:Nombre,:Apellidos,:Fecha,:Telefono,:Genero,:Repitente,:Direccion,:Grado,:Seccion,:Encargado,:Edad,:Etnia,:Expediente)";

    $statement= $conexion->prepare($sql);

    $statement->bindParam(':Codigo', $Codigo);
    $statement->bindParam(':Nombre', $Nombre);
    $statement->bindParam(':Apellidos', $Apellidos);
    $statement->bindParam(':Fecha', $FechaNacimiento);
    $statement->bindParam(':Telefono', $Telefono);
    $statement->bindParam(':Genero', $Genero);
    $statement->bindParam(':Repitente', $Repitente);
    $statement->bindParam(':Direccion', $Direccion);
    $statement->bindParam(':Grado', $Grado);
    $statement->bindParam(':Seccion', $Seccion);
    $statement->bindParam(':Encargado', $Encargado);
    $statement->bindParam(':Edad', $Edad);
    $statement->bindParam(':Etnia', $Etnia);
    $statement->bindParam(':Expediente', $Expediente);

    if (!$statement) {
      return "Error al crear el registro";
    }else {
        $statement->execute();
      return  "Registro Ingresado";
    }
  }


  public function insertarDatosR($Codigo,$Por,$Nombre,$Apellidos,$Concepto,$Cantidad,$Fecha,$Grado,$Seccion,$Mes,$ReciboNum)
  {
  /*  $modelo= new Conexion();
    $conexion=$modelo->get_conexion();
    $sql="insert into usuario (NombreIngreso,pass) values(:usuario,:pass)";
    $statement= $conexion->prepare($sql);
    $statement->bindParam(':usuario',$usuario);
    $statement->bindParam(':pass',$pass);*/

    $modelo= new Conexion();
    $conexion=$modelo->get_conexion();
//VINCULAR CON LA BASE DE DATOS
    $sql = "insert into recibos(Recibos No,Por,Apellidos,FechaNacimiento,Telefono,Genero,Repitente,Direccion,Grado,Seccion,Encargado,Edad,Etnia,ExpedienteCompleto)
    values(:Codigo,:Nombre,:Apellidos,:Fecha,:Telefono,:Genero,:Repitente,:Direccion,:Grado,:Seccion,:Encargado,:Edad,:Etnia,:Expediente)";

    $statement= $conexion->prepare($sql);

    $statement->bindParam(':Codigo', $Codigo);
    $statement->bindParam(':Nombre', $Nombre);
    $statement->bindParam(':Apellidos', $Apellidos);
    $statement->bindParam(':Fecha', $FechaNacimiento);
    $statement->bindParam(':Telefono', $Telefono);
    $statement->bindParam(':Genero', $Genero);
    $statement->bindParam(':Repitente', $Repitente);
    $statement->bindParam(':Direccion', $Direccion);
    $statement->bindParam(':Grado', $Grado);
    $statement->bindParam(':Seccion', $Seccion);
    $statement->bindParam(':Encargado', $Encargado);
    $statement->bindParam(':Edad', $Edad);
    $statement->bindParam(':Etnia', $Etnia);
    $statement->bindParam(':Expediente', $Expediente);

    if (!$statement) {
      return "Error al crear el registro";
    }else {
        $statement->execute();
      return  "Registro Ingresado";
    }
  }

public function cargarDatos(){
  $rows=null;
  $modelo= new Conexion();
  $conexion= $modelo->get_conexion();
  $sql= "select * from usuario";
  $statement= $conexion->prepare($sql);
  $statement->execute();
  while ($result= $statement->fetch()) {
    $rows[]= $result;

  }
  return $rows;

}

public function DatosRecibos($Codigo)
{

    $rows = null;
    $modelo = new Conexion();
    $conexion = $modelo-> get_conexion();
  $sql = "select * from alumnos WHERE Codigo = $Codigo ";
  $statement = $conexion->prepare($sql);
  $statemen = $conexion->prepare($sql);
  $statement->execute();
  $statemen->execute();

  if ($resul= $statemen->fetch()){
    while ($result = $statement->fetch()) {
      //$rows[]= $result;
      echo "<tr> \n";
  echo "<th>".$result['Codigo']."</th>\n";
      //$CodigoA=$result['Codigo'];

      echo "<br>";
      //echo"<th>".$result['Codigo']."</th> \n";
       echo "<br>";
      echo "<th>".$result['Nombre']."</th>\n";
    //  echo "<br>";
      echo "<th>".$result['Apellidos']."</th>\n";
    //  echo "<br>";
      echo "<th>".$result['Grado']."</th>\n";
    //  echo "<br>";
      echo "<th>".$result['Seccion']."</th>\n";
            echo "</tr> \n";
            echo "<br>";
          }
  return $result;
}else {
  echo "Lo siento ese Apellido no esta en mi Base de datos no ";
}
}
public function DatosRecibosA($Apellidos){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
  //$sql = "select * from alumnos WHERE Apellidos = $Apellidos";
    $sql=("SELECT * FROM alumnos WHERE Apellidos LIKE '%$Apellidos%' ORDER BY Apellidos");
    $statement = $conexion->prepare($sql);
    $statemen = $conexion->prepare($sql);
    $statement->execute();
    $statemen->execute();
    echo "<br>";
    if ($resul= $statemen->fetch()){
        while ($result=$statement->fetch()) {
          echo "<tr> \n";
          echo "<th>".$result['Codigo']."</th>\n";
          echo "<br>";
          echo "<th>".$result['Nombre']."</th>\n";
          echo "<th>".$result['Apellidos']."</th>\n";
          echo "<th>".$result['Grado']."</th>\n";
          echo "<th>".$result['Seccion']."</th>\n";
          //  "<a href='../contenido.php'>Regresar </a>";
          echo "<th><a href=\"../Controlador/recibos.php\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">Generar Recibo</a></th>\n";
          echo "</tr> \n";    }
         return $result;
    }else {
  echo "Lo siento ese Apellido no esta en mi Base de datos";
  }
}


public function listarAlumnos($result){
  while ($result = $statement->fetch()) {
    //$rows[]= $result;
    echo "<tr> \n";

    $CodigoA=$result['Codigo'];
    echo $CodigoA;
    echo "<br>";
    //echo"<th>".$result['Codigo']."</th> \n";
     echo "<br>";
    echo "<th>".$result['Nombre']."</th>\n";
  //  echo "<br>";
    echo "<th>".$result['Apellidos']."</th>\n";
  //  echo "<br>";
    echo "<th>".$result['Grado']."</th>\n";
  //  echo "<br>";
    echo "<th>".$result['Seccion']."</th>\n";
          echo "</tr> \n";
          echo "<br>";
        }
}
}


 ?>
