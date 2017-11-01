<?php

 $Carreras = array(
          '1ro Básico',
          '2do Básico',
          '3ro Básico',
          '4to Agronomía',
          '4to Bach en educación',
          '4to Ciencias de la comunicación',
          '4to Computación',
          '4to Criminología',
          '4to Dibujo',
          '4to Diseño Gráfico',
          '4to Electricidad',
          '4to Enfermería',
          '4to Fisioterapia',
          '4to Gastronomía',
          '4to Mecánica',
          '4to Medicina',
          '4to Nutricionista',
          '4to Odontología',
          '4to Optometría',
          '4to PAE',
          '4to Parvularia',
          '4to PC',
          '4to Productividad',
          '4to Psicología',
          '4to Químico Biólogo',
          '4to Radiología',
          '4to Secretariado',
          '4to Trabajo Social',
          '5to Bach en Educación',
          '5to Computación',
          '5to Criminología',
          '5to Derecho',
          '5to Dibujo',
          '5to Diseño Gráfico',
          '5to Electricidad',
          '5to Enfermería',
          '5to Enfermería B',
          '5to Fisioterapia',
          '5to Mecánica',
          '5to Medicina',
          '5to Odontología',
          '5to PAE',
          '5to Parvularia',
          '5to PC',
          '5to Productividad',
          '5to Psicología',
          '5to Químico Biólogo',
          '5to Radiología',
          '5to Secretariado',
          '6to Dibujo',
          '6to Electricidad',
          '6to Mecánica',
          '6to PAE',
          '6to Parvularia',
          '6to PC' );
    $Etnias = array(
    'K_ICHE',
    'KAQCHIKEL',
    'TZ_UTUJIL',
    'ACHI',
    'SAKAPULTEKO',
    'IXIL',
    'USPANTEKO',
    'MAM',
    'CHUJ',
    'Q_ANJOB_AL',
    'AWAKATEKO',
    'Q_EQCHI',
    'POQOMCHI',
    'POQOMAM',
    'ITZAJ',
    'CHORTI',
    'AKATEKO',
    'XINKA',
    'MOPAN',
    'GARIFUNA',
    'SIPAKAPENSE',
    'TEKTITEKO',
    'LADINO',
    'CHALCHITEKO' );
    $Meses = array(
    'Inscripción',
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre' );


function lista($nombre,$Carreras1){
  $array = $Carreras1;
  $txt="";
  for ($i=0; $i <sizeof($array ); $i++) {
    $txt.="<option value='$array[$i]'>";
  }
  $txt.='';
  return $txt;

}


?>
