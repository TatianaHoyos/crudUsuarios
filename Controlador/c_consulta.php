<?php
//metodo para el tratamiento de notificaciones
    //error_reporting(0);
    include_once "../modelo/conexion.php";

    $query = 'SELECT * FROM documento';
    $ejecucion =$conexion -> query($query);
    $rows = [];

    while($row= $ejecucion -> fetch_object()){
        $rows[]=$row;
    }
    $json = json_encode($rows);
    echo $json;
    
?>