<?php
//include '../Model/consultas.php';

//$nombre = $_POST['nombres'];
//$prueba = $_POST['prueba'];
//echo $nombre;
//echo $prueba;


//echo leer($nombre);


//if (isset($_GET['accion']) == "insertar")


if (isset($_GET['accion']) == 'insertar') {

    
    include '../Model/consultas.php';
    $nombres =     $_POST['nombres'];
    $apellidos =    $_POST['apellidos'];
    $cedula =    $_POST['cedula'];
    $provincia =    $_POST['provincia'];
    $fec_na =    $_POST['fec_na'];
    $email =    $_POST['email'];
    $observaciones1 =    $_POST['observaciones1'];
    $foto =    $_POST['foto'];
    $fec_ingre =    $_POST['fec_ingre'];
    $cargo =    $_POST['cargo'];
    $departamento =    $_POST['departamento'];
    $provincia2 =    $_POST['provincia2'];
    $sueldo =    $_POST['sueldo'];
    $jornada =  $_POST['jornada'];
    $observaciones2 =    $_POST['observaciones2'];

    $resultado = insertarEmpleado($nombres,$apellidos,$cedula,$provincia,$fec_na,$email,$observaciones1,
    $foto,$fec_ingre,$cargo,$departamento,$provincia2,$sueldo,$jornada,$observaciones2);
    
    echo $resultado ;
    
}
