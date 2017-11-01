<?php
/*"login":"'.$row['Codigo'].'",

"password":"'.$row['Nombre'].'",
"name":"'.$row['Apellidos'].'",
"type":"'.$row['Grado'].'",
"status":"'.$row['Seccion'].'",
"acciones":"'.$editar.$eliminar.'"*/
	include ("../Modelo/conex.php");

	$consulta = "SELECT * FROM alumnos";
	$registro = mysql_query($consulta,$dbx);

	$tabla = "";

	while($row = mysql_fetch_array($registro)){
		$editar = '<a href=\"../Controlador/recibos.php ? a='.$row['Codigo'].'&b='.$row['Nombre'].'&c='.$row['Apellidos'].'&d='.$row['Grado'].'&e='.$row['Seccion'].'\" data-toggle=\"tooltip\" data-placement=\"top\"title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"actionDelete.php?id='.$row['Codigo'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"Codigo":"'.$row['Codigo'].'",
			"Nombre":"'.$row['Nombre'].'",
			"Apellidos":"'.$row['Apellidos'].'",
			"Grado":"'.$row['Grado'].'",
			"Seccion":"'.$row['Seccion'].'",
			"Acciones":"'.$editar.$eliminar.'"
		},';
}


	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';

?>
