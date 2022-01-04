<?php

function leer()
{
    include '../Model/conexion.php';
    $consulta = "SELECT * FROM `empleados`";
    if ($resultado = $cnx->query($consulta)) {
        while ($obj = $resultado->fetch_object()) {
            
            $arr [] = array(
            
                'Nombre' => $obj->Nombre,
                'Apellido' => $obj->Apellido,
                'Cedula' => $obj -> Cedula,
                'Cargo' => $obj -> Cargo,

               
            );
        }
        $resultado->close();
    }

    return json_encode($arr);
}


function insertar($nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2)
{
    include '../Model/conexion.php';


    $consulta = "INSERT INTO `empleados`(`Nombre`, `Apellido`, `Cedula`, `Provincia_1`, `Fecha_Nacimiento`,"
        . "`Email`, `Observaciones_1`, `Foto`, `Fecha_ingreso`, `Cargo`, `Departamente`, `Provincia_2`, `Sueldo`,"
        . "`Jornada`,`Observaciones_2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $sql = $cnx->prepare($consulta);

    $sql->bind_param("sssssssssssssss", $nombres, $apellidos, $cedula, $provincia, $fec_na, $email, $observaciones1, $foto, $fec_ingre, $cargo, $departamento, $provincia2, $sueldo, $jornada, $observaciones2);
    $sql->execute();
    $sql->close();
    echo 'Insertado';
}




function buscar($buscar)
{
    include '../Model/conexion.php';
    $consulta = "SELECT * FROM `empleados` WHERE Nombre LIKE '% $buscar %'";
    if ($resultado = $cnx->query($consulta)) {
        while ($obj = $resultado->fetch_object()) {
            
            $arr [] = array(
            
                'Nombre' => $obj->Nombre,
                'Apellido' => $obj->Apellido,
                'Cedula' => $obj -> Cedula,
                'Cargo' => $obj -> Cargo,

               
            );
        }
        $resultado->close();
    }

    return json_encode($arr);
}