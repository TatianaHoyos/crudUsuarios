<?php
$host="localhost";
$database="crudusuario";
$port = '5000';
$user='root';
$password='';


  $conexion = new mysqli($host, $user, $password, $database, $port);

  // Verificamos la conexión
  if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
  }
  //echo "Conexión exitosa";
  ?>