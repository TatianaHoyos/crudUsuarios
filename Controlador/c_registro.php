<?php
include_once "../modelo/conexion.php";

$respuesta = new stdClass();
$respuesta->estado = '';
$respuesta->mensaje = '';

//validando el click del boton
if (isset($_POST['operacion']) && $_POST['operacion'] == "guardar") {
    //captura de variables
    $tipoUsuario = 3;
    $idTipoDocu = $_POST['idTipoDocu'];
    $numeroDocumento = $_POST['numeroDocu'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $apellidoUsuario = $_POST['apellidoUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $passwordUsuario = $_POST['passwordUsuario'];
    $generoUsuario = $_POST['generoUsuario'];
    $fechaNUsuario = $_POST['fechaNUsuario'];
    $teleUsuario = $_POST['teleUsuario'];
    $celuUsuario = $_POST['celuUsuario'];
    $direccionUsuario = $_POST['direccionUsuario'];

    $opcion = 'guardar';

    try {
        //ejecutamos la primer consulta para la insercion de la tabla usuario
        $sql = "CALL crudUsuario('$numeroDocumento','$tipoUsuario','$nombreUsuario','$apellidoUsuario','$emailUsuario','$passwordUsuario', '$opcion')";

        $ejecucion = $conexion->query($sql);
        if ($row = $ejecucion->fetch_row()) {
            //si el resultado de la ultima consulta es mayor a 0, entonces hemos guargado en ambas tablas
            $row[0];
            //Se ejecutó el procedimiento al macenado de forma correcta
        } else {
            $respuesta->estado = 'error';
            $respuesta->mensaje = 'ha ocurrido un error al guardar el usuario';
            echo json_encode($respuesta);
        }

        $conexion->next_result();

        //include_once "../Modelo/conexion.php";
        $sql = "call datoUsuario('$idTipoDocu','$tipoUsuario','$numeroDocumento',
        '$generoUsuario','$fechaNUsuario','$direccionUsuario','$teleUsuario',
        '$celuUsuario','$opcion')";
        $ejecucion = $conexion->query($sql);
        if ($row = $ejecucion->fetch_row()) {
            //si el resultado de la ultima consulta es mayor a 0, entonces hemos guargado en ambas tablas
            $row[0];
            //Se ejecutó el procedimiento al macenado de forma correcta
            $respuesta->estado = 'exito';
            $respuesta->mensaje = 'Se a guardado el usuario con exito';
            echo json_encode($respuesta);
        } else {
            $respuesta->estado = 'error';
            $respuesta->mensaje = 'ha ocurrido un error al guardar el usuario';
            echo json_encode($respuesta);
        }
        
    } catch (Exception $e) {
        die("error::: $e");
    }

}

?>