

<!DOCTYPE html>
<html>

<head>
    <title>Nuevo Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/v_style.css" rel="stylesheet" />
</head>
<?php
    include('v_login.php')
?>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand disabled namePage" >AnimeTH</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="inicio" class="nav-link" aria-current="page" href="v_index.php">Inicio</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div>
        <div class="container text-center p-2 g-col-6">
            <h2><i>Registrate!</i></h2>

            <div class="row justify-content-center">
                <div id="resultado" class="alert alert-success col-md-8" role="alert">
                    This is a success alert—check it out!
                </div>
            </div>


            <form id="formUsuario"  method="post">
                <h3 class="mt-3"><i>Información personal</i></h3>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="idTipoDocu">Tipo de Documento</label>
                        <select id="idTipoDocu" name="idTipoDocu" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="numeroDocu">Número de Id</label>
                        <input type="text" class="form-control" id="numeroDocu" name="numeroDocu" placeholder="Ingrese su ID"
                            onkeypress="return validarNumero(event)">
                    </div>

                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="nombreUsuario">Nombres</label>
                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Ingrese su Nombre"
                            onkeypress="return sololetras(event)">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="apellidoUsuario">Apellidos</label>
                        <input type="text" class="form-control" id="apellidoUsuario" name="apellidoUsuario" placeholder="Ingrese su Apellido"
                            onkeypress="return sololetras(event)">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="emailUsuario">Email</label>
                        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email"
                            onkeypress="return validarEmail(event)">
                        <small id="emailMensaje" class="form-text"></small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="passwordUsuario">Password</label>
                        <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" placeholder="Password"
                            onkeypress="return contrasena(event)">
                    </div>
                </div>

                <h3 class="mt-3"><i>Datos del Contacto:</i></h3>

                <div class="form-row justify-content-center">
                    <div class="form-group col-md-2">
                        <label for="generoUsuario">Genero</label>
                        <select id="generoUsuario" name="generoUsuario" class="form-control">
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="fechaNUsuario">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNUsuario" name="fechaNUsuario" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="teleUsuario">Teléfono</label>
                        <input type="text" class="form-control" id="teleUsuario" name="teleUsuario" placeholder="Ingrese Teléfono"
                            onkeypress="return validarNumero(event)">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="celuUsuario">Celular</label>
                        <input type="text" class="form-control" id="celuUsuario" name="celuUsuario" placeholder="Ingrese Celular"
                            onkeypress="return validarNumero(event)">
                    </div>

                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-8">
                        <label for="direccionUsuario">Dirección de Entrega y Facturación</label>
                        <input type="text" class="form-control" id="direccionUsuario" name="direccionUsuario"
                            placeholder="Donde recibiras tus productos o tu factura">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <!--campo para validar operación en PHP-->
                    <input type="hidden" name="operacion" value="guardar">
                    <button type="button"  class="btn btn-outline-primary mr-5" data-toggle="modal" data-target="#modalLogin">Ya Tienes Cuenta, Ingresa...</button>
                    <button type="button" name="registro" id="registro" onclick="saveUser()" class="btn btn-primary">Registrate</button>
                </div>

        </form>
    </div>
    <div class="container text-center">

    </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Optional JavaScript -->
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