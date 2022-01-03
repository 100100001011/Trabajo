<?php

$usuario= "root";
$clave= "";
$server= "localhost";
$bdd = "pedidos";

$cnx = mysqli_connect($server,$usuario,$clave);

//PRUEBA PARA LA BASE DE DATOS
if($cnx){
    $resultBdd = mysqli_select_db($cnx, $bdd);
    if($resultBdd){
        //echo "Conexion exitosa";
    }else{
        //echo "No Existe la BBDD!!!";
    }
}else{
    //echo "No hay conexion";
}