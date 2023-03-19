<?php
//metodo para el tratamiento de notificaciones
    error_reporting(1);
    include_once "../Modelo/conexion.php";

//validando el click del boton
if(isset($_POST['operacion']) && $_POST['operacion'] == "guardar"){
    //captura de variables
    $tipoUsuario=3;
    $idTipoDocu=$_POST['idTipoDocu'];
    $numeroDocumento=$_POST['numeroDocu'];
    $nombreUsuario=$_POST['nombreUsuario'];
    $apellidoUsuario=$_POST['apellidoUsuario'];
    $emailUsuario=$_POST['emailUsuario'];
    $passwordUsuario=$_POST['passwordUsuario'];
    $generoUsuario=$_POST['generoUsuario'];
    $fechaNUsuario=$_POST['fechaNUsuario'];
    $teleUsuario=$_POST['teleUsuario'];
    $celuUsuario=$_POST['celuUsuario'];
    $direccionUsuario=$_POST['direccionUsuario'];
    
    $opcion='guardar';

    try {
        //ejecutamos la primer consulta para la insercion de la tabla usuario
        $sql="CALL crudUsuario('$numeroDocumento','$tipoUsuario','$nombreUsuario','$apellidoUsuario','$emailUsuario','$passwordUsuario', '$opcion')";

        $ejecucion=$conexion->query($sql);
        if($row=$ejecucion->fetch_row()){
            //si el resultado de la ultima consulta es mayor a 0, entonces hemos guargado en ambas tablas
            echo $row[0];
            echo "paso por aqui";
            echo "<script> alert('punto1')</script>";
        }else{
            $msj= 'ha ocurrido un error al guardar el usuario';
            echo $msj;
            echo "<script> alert('punto2')</script>";
        }

        $conexion -> next_result();

        //include_once "../Modelo/conexion.php";
        $sql= "call datoUsuario('$idTipoDocu','$tipoUsuario','$numeroDocumento',
        '$generoUsuario','$fechaNUsuario','$direccionUsuario','$teleUsuario',
        '$celuUsuario','$opcion')";
        $eje= $conexion -> query($sql);
        $respuesta= $eje -> fetch_row();
        echo "paso por aqui";
        echo "<script> alert('punto3')</script>";
    } catch (Exception $e) {
        die ("error::: $e");
    }

}

?>
