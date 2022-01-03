<?php

function leer($buscar) {
    include '../Model/conexion.php';
    //$sql = "SELECT * FROM `registros` WHERE `nombre` LIKE '%$buscar%' OR `telefono` LIKE '%$buscar%' OR `correo` LIKE '%$buscar%' OR `edad` LIKE '%$buscar%'";
    $sql = "SELECT * FROM `clientes` WHERE `NOMBRE_CLIENTE` LIKE '%$buscar%'";
    $result = mysqli_query($cnx, $sql);
    
    while ($obj = mysqli_fetch_array($result)) {
        
        $arr [] = array(
            
            'id' => $obj['ID_CLIENTE'],
            'nombre' => $obj['NOMBRE_CLIENTE'],
            
        );
    }

    return json_encode($arr);
}