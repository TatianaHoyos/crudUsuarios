<?php 
session_start();

include_once "../modelo/conexion.php";

if(isset($_POST['operacion']) && $_POST['operacion'] == "login"){
    $usuario=$_POST['emailLogin'];
    $password=$_POST['passwordLogin'];

    //consultamos en la base de datos si el usuario esta registrado

    $sql="SELECT idUsuario,idRol, concat(Nombres,' ',Apellidos)as user from usuario where email ='$usuario'
    and password='$password' and estado='ACTIVO'";

    $ejecucion=$conexion->query($sql);
    //validacion de la existencia del usuario
    if($ejecucion->num_rows > 0){
        $row=$ejecucion->fetch_row();

        //definimos de parametros de la sesion
        $_SESSION['idDocumento ']=$row[0]; //id del usuario para luego usar las transacciones o cotizaciones
        $_SESSION['rol']=$row[1];            //rol de usuario para poder redirigir la sesion
        $_SESSION['nombreUsuario']=$row[2];      //usaurio para mostrar en la barra de menu

        switch($_SESSION['rol']){
            case '1':
                //imprimimos para la toma de desisiones de javascript
                echo $_SESSION['rol'];
                break;

         default:
                  //imprimimos para la toma de desisiones de javascript
                  echo $_SESSION['rol'];
                  break;
        }
    }else{
        echo ("el usuario no se encuentra registrado");
    }
}
?>