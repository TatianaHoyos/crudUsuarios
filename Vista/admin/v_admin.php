<?php 
 session_start();
 $user= $_SESSION['nombreUsuario'];
 
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>AnimeTH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="../css/v_style.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand disabled namePage" >AnimeTH</a>
      <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php 
                  echo $user;
                  ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Configuración</a>
                    <a class="dropdown-item" href="../../controlador/c_logout.php">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container mt-3 mb-3">
          <div class="row mb-3" >
            <div class="col">
              <div class="card">
              <img class="card-img-top"  src="../img/gestion-usuarios.jpg">
              <div class="card-body">
                <h4 class="card-title">Gestion de Usuarios</h4>
                <p class="card-text">Gestion de Usuarios...</p>
                <a href="v_reporteUsuario.php">Generar Reporte</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            </div>
            <div class="col">
              <div class="card">
              <img class="card-img-top"  src="../img/gestion-producto.png">
              <div class="card-body">
                <h4 class="card-title">Gestion de Productos</h4>
                <p class="card-text">Gestion de Producto...</p>                  
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            </div>
            <div class="col">
              <div class="card">
              <img class="card-img-top"  src="../img/factura.png">
              <div class="card-body">
                <h4 class="card-title">Gestion de Cotizaciones</h4>
                <p class="card-text">Gestion de Cotizaciones...</p>
                <a href="v_graficos.php">Ver estadisticas</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            </div>
            
            </div>
            </div>
          </div>
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
          integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
          <script src="js/validaciones.js"></script>
    <script src="js/funciones.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>