<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="formLogin" class="col-sm-12 text-center"  method="post">
                <h3 class="mt-3"><i>Accede al sistema</i></h3>
            <div class="form-group">
                <div id="resultadoLogin" class="alert alert-danger " role="alert">Error</div>
            </div>
            <div class="form-group text-center">
              <img src="img/waifu.png" alt="" height="170">
</div>
                <div class="form-group text-center">
                        <label for="emailLogin">Email</label>
                        <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Email"
                            onkeypress="return validarEmail(event)">
                        <small id="emailLoginMensaje" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password"
                            onkeypress="return contrasena(event)">
                    </div>
                    <div class="form-group text-center mb-3">
                    <input type="hidden" name="operacion" value="login">
                    <button type="button" onclick="login()" class="col-md-11 form-control btn btn-primary">Acceder</button>
                    <p class="mt-4">¿Sin cuenta? <a id="login" href="v_registro.php">Registrate</a></p>
                    <p class="invisible">p</p>
                  </div>
  </form>
    </div>
  </div>
</div>