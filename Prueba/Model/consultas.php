<?php

function leer($buscar)
{
    include '../Model/conexion.php';
    //$sql = "SELECT * FROM `registros` WHERE `nombre` LIKE '%$buscar%' OR `telefono` LIKE '%$buscar%' OR `correo` LIKE '%$buscar%' OR `edad` LIKE '%$buscar%'";
    $sql = "SELECT * FROM `clientes` WHERE `NOMBRE_CLIENTE` LIKE '%$buscar%'";
    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {

        $arr[] = array(

            'id' => $obj['ID_CLIENTE'],
            'nombre' => $obj['NOMBRE_CLIENTE'],
            //prueba
        );
    }

    return json_encode($arr);
}


function insertarEmpleado($nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2)
{
    include '../Model/conexion.php';

    
    $consulta="INSERT INTO `empleados`(`Nombre`, `Apellido`, `Cedula`, `Provincia_1`, `Fecha_Nacimiento`,"
    . "`Email`, `Observaciones_1`, `Foto`, `Fecha_ingreso`, `Cargo`, `Departamente`, `Provincia_2`, `Sueldo`,"
    . "`Jornada`,`Observaciones_2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $sql = $cnx ->prepare($consulta);
    
    $sql->bind_param("sssssssssssssss",$nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2);
    $sql->execute();
    $sql->close();
    echo 'Insertado';
   

    
}
