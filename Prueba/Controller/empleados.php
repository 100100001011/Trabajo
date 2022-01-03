<?php
   include '../Model/consultas.php';

    $nombre = $_POST['nombres'];
    $prueba = $_POST['prueba'];
    echo $nombre;
    echo $prueba;   
 

    echo leer($nombre);



