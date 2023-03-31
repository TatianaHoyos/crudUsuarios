<?php
//metodo para el tratamiento de notificaciones
//include "../Modelo/conexion.php";
include_once '../../config.php';
#echo BASE_DIR;
include_once BASE_DIR . '/modelo/conexion.php';

#c:/xampp/htdocs/crudUsuarios_mvc/Modelo/conexion.php

$query = "SELECT CONCAT(u.nombres,' ',u.apellidos) as usuario, du.idUsuario as documento,
d.tipoDocumento, du.genero, du.celularUsuario, u.email, r.rol, e.nombre as empresa
FROM datousuario du
INNER JOIN usuario as u ON du.idUsuario = u.idUsuario
INNER JOIN rol as r ON r.idRol = du.idRol
INNER JOIN empresa as e ON du.idEmpresa = e.idEmpresa
INNER JOIN documento as d ON du.idDocumento = d.idDocumento";
$ejecucion = $conexion->query($query);
$rows = [];

while ($row = $ejecucion->fetch_assoc()) {
$rows[] = $row;
}
/*foreach ($rows as $fila) {
     echo $fila['usuario'];
}*/
/*$json = json_encode($rows);
echo $json;*/

?>