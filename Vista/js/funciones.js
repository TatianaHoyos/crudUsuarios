'use strict' //atributo para indicar que se usan funciones propias de ajax y jquery

$(document).ready(function (){
    consultarTiposDocumentos();
    $("#resultado").hide();

      $('#modalLogin').on('show.bs.modal', function (event) {
        /*var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)*/
      });
  });
  

function saveUser(){

    var registro= $("#formUsuario").serialize();
    console.log('Datos serializados: '+ registro);

    if (validarCampoVacio($("#numeroDocu").val().length ,'Debe ingresar documento')) {
        return false;
    }

    if (validarCampoVacio($("#nombreUsuario").val().length ,'Por favor ingrese un nombre')) {
        return false;
    }

    if (validarCampoVacio($("#apellidoUsuario").val().length ,'Por favor ingrese un apellido')) {
        return false;
    }

    if (validarCampoVacio($("#emailUsuario").val().length ,'Por favor ingrese un email')) {
        return false;
    }

    if (validarCampoVacio($("#teleUsuario").val().length ,'Por favor ingrese un numero de telefono')) {
        return false;
    }

    if (validarCampoVacio($("#celuUsuario").val().length ,'Por favor ingrese un numero celular')) {
        return false;
    }

    if (validarCampoVacio($("#direccionUsuario").val().length ,'Por favor ingrese una direccion')) {
        return false;
    }

    if (validarCampoVacio($("#fechaNUsuario").val().length ,'Por favor ingrese una fecha')) {
        return false;
    }
    
    if (validarCampoVacio($("#passwordUsuario").val().length ,'Por favor ingrese una contraseña')) {
        return false;
    }

    var onExito = function(data){
        $("#resultado").removeClass("alert-danger");
        $("#resultado").addClass("alert-success");
        $("#resultado").show();
        $("#resultado").text(data.message);
      };

var onError = function(error){
        $("#resultado").removeClass("alert-success");
        $("#resultado").addClass("alert-danger");
        $("#resultado").show();
        $("#resultado").text(error);
      };

    $.ajax({
        type: "POST",
        url: "../controlador/c_registro.php",
        data: registro,
        success: onExito,
        error: onError
    })
    .done(function(resultado){
        console.log(resultado);
    });
}


function validarCampoVacio(longitudCampo,mensaje) {
    if(longitudCampo <1)
    {
       Swal.fire({
         icon: 'warning',
         title:'Oops',
         text: mensaje
       });
       return true;
    }
}

function consultarTiposDocumentos(){
    var onExito = function(data){
        const result = JSON.parse(data);
        var $dropdown = $("#idTipoDocu");
       
        $.each(result, function() {
            $dropdown.append($("<option />").val(this.idDocumento).text(this.tipoDocumento));
        });
      };

var onError = function(error){
        console.log(error);
      };

    $.ajax({
        type: "POST",
        url: "../controlador/c_consulta.php",
        success: onExito,
        error: onError
    })
    .done(function(resultado){
        console.log(resultado);
    });
}

function login(){
    var datos= $("#formLogin").serialize();
    
    console.log('Datos serializados: '+ datos);

    if (validarCampoVacio($("#passwordLogin").val().length ,'Por favor ingrese una contraseña')) {
        return false;
    }

    if (validarCampoVacio($("#emailLogin").val().length ,'Por favor ingrese un email')) {
        return false;
    }


    var onExito = function(data){
        console.log(data);
        this.data=parseInt(data);
        switch(this.data){
            case 1:
                window.location="../Vista/admin/v_admin.php";
                break;
            case 2:
                window.location="../pendiente.php";
                break;
            case 3:
                window.location="../Vista/cliente/v_cliente.php";
                break;

        }
      };

var onError = function(error){
        $("#resultadoLogin").removeClass("alert-success");
        $("#resultadoLogin").addClass("alert-danger");
        $("#resultadoLogin").show();
        $("#resultadoLogin").text(error);
      };

    $.ajax({
        type: "POST",
        url: "../controlador/c_login.php",
        data: datos,
        success: onExito,
        error: onError
    })
    .done(function(resultado){
        console.log(resultado);
    });
}

