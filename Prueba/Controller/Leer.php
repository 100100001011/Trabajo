<?php

if (isset($_GET['accion']) == 'leer') {
    
    include '../Model/consultas.php';
    
    $resultado=leer();
    echo $resultado;
    
}