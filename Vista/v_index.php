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

    <link rel="stylesheet" href="css/v_style.css">
</head>
<html>
  <body>
  <?php
    include('v_login.php')
?>

  <main>
      <div class="container-fluid" id="banner"></div>
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
        <li class="nav-item">
          <a class="nav-link  " href="#contacto">Contactenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="v_registro.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modalLogin">Acceder</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center ">
            <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-4 fw-bold lh-1 mb-3">AnimeTH</h1>
              <p class="col-lg-10 fs-7">Animeth tiene como objetivo aportar un amplio catálogo de animes que no son transmitidos en los canales de televisión abierta. Su fin es compartir con sus seguidores la mayor cantidad de episodios y series anime que salen cada año.</p>
              <p class="col-lg-10 fs-7">Una ventaja de AnimeTH es que permite la colaboración de sus usuarios. Eso sí, siempre y cuando se trate de información real y con sentido, permitiendo que la comunidad crezca de forma amable y atractiva.</p>
            </div>
               <div  class="col-6 col-sm-5 col-lg-4">
                <img  src="img/animel.jpg" class="d-block mx-lg-3 img-fluid " width="300" height="300" >
                 <img src="img/dragonball.jpeg" class="d-block mx-lg-3 img-fluid " width="300" height="300" >
               </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div id="contacto" class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <table class="table table-success table-striped" >
                <h2 style="text-align: center;color: rgb(32, 71, 58);">Horarios de Atención</h2>
                <thead>
                    <tr>
                        <th>Día </th>
                        <th>Horario</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr >
                        <td >Lunes</td>
                        <td>24h</td>
                    </tr>
                    <tr>
                      <td>Martes</td>
                      <td>24h</td>
                  </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>24h</td>
                    </tr>
                    <tr>
                      <td>Jueves</td>
                      <td>24h</td>
                  </tr>
                        
                    <tr>
                        <td>Viernes</td>
                        <td>24h</td>
                    </tr>
                    <tr>
                      <td>Sabado</td>
                      <td>24h</td>
                  </tr>
                  <tr>
                    <td>Domingo</td>
                    <td>24h</td>
                </tr>
                </tbody>
               
            </table>
           
    
            <h2 style="text-align: center;color: rgb(32, 71, 58);">UBICACIÓN</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31724.13637569581!2d-75.55549718182888!3d6.326977156952006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f79c7c5af75%3A0x576a0b2ba04d1aa8!2s051051%2C%20Bello%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1670784909270!5m2!1ses!2sco" width="550" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
            <table class="table" >
              <h2 style="text-align: center;color: rgb(32, 71, 58);">Telefonos</h2>
              <thead>
                  <tr>
                      <th>7343743 - 72635298 - 73436732</th>
                      
                  </tr>
              </thead>
              
            </table>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <form class="p-4 p-md-5 border rounded-3 bg-ligh" >
                <h2>Ingrese sus datos</h2>
                <div class="form-floating mb-3">
                  <p>Nombres</p>
                  <input type="text" class="form-control" id="nombre" required placeholder="text" >
                  <label for="nombre"></label>
                </div>
                <div class="form-floating mb-3">
                  <p>Apellidos</p>
                  <input type="text" class="form-control" id="apellidos" placeholder="text">
                  <label for="apellidos"></label>
                </div>
                <div class="form-floating mb-3">
                  <p>Email</p>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                  <label for="email"></label>
                </div>
                <div class="form-floating mb-3">
                  <p>Observación</p>
                  <p><textarea name="comentario" rows="5" cols="40">Escribe aquí tu comentario: </textarea></p>
                </div>
                <button type="button" class="btn btn-secondary">Enviar</button>
    
                <button type="button" class="btn btn-secondary">Restablecer</button>
              </form>
            </div>
          </div>
        </div>

        <div class="px-4 py-5 text-center bg-dark" >
          <div class="py-1">
            <h3 class="display-7 fw-bold text-white">Tatiana Hoyos</h3>
            <div class="col-lg-6 mx-auto">
              <p class="fs-5 mb-0 text-white">Email: tihoyos4@misena.edu.co </p>
              <p class="fs-5 mb-0 text-white">ADSO Ficha #2559202 </p>
              <p class="fs-9 mb-1 text-white">© Copyright AnimeTH  - 2023</p>
            </div>
          </div>
        </div>
      </main>

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

