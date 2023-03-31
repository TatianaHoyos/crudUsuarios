'use strict' //atributo para indicar que se usan funciones propias de ajax y jquery

$(document).ready(function (){
    consultarTiposDocumentos();
    $("#resultado").hide();
    $("#resultadoLogin").hide();
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

    $.ajax({
        type: "POST",
        url: "../controlador/c_registro.php",
        data: registro 
    })
    .done(function(resultado){
        try{
            const result = JSON.parse(resultado);
            if(result['estado']==="exito" ){
                $("#resultado").removeClass("alert-danger");
                $("#resultado").addClass("alert-success");
                $("#resultado").show();
                $("#resultado").text(result['mensaje']);
            }else{
                $("#resultado").removeClass("alert-success");
                $("#resultado").addClass("alert-danger");
                $("#resultado").show();
                $("#resultado").text(result['mensaje']);
            }
        }catch(error){
            $("#resultado").removeClass("alert-success");
            $("#resultado").addClass("alert-danger");
            $("#resultado").show();
            $("#resultado").text('ha ocurrido un error inesperado');
        }
    });
}

function guardarVentayCompra(){

    var registro2= $("#formVentayCompra").serialize();
    console.log('Datos serializados: '+ registro2);

    if (validarCampoVacio($("#monto").val().length ,'Debe ingresar un monto ')) {
        return false;
    }

    if (validarCampoVacio($("#fecha").val().length ,'Por favor ingrese una fecha')) {
        return false;
    }
    
    if (validarCampoVacio($("#tTransaccion").val().length ,'Por favor ingrese el tipo de la transaccion')) {
        return false;
    }

    $.ajax({
        type: "POST",
        url: "../../controlador/c_guardarVentaYCompras.php",
        data: registro2
    })
    .done(function(resultado){
        Swal.fire({
            icon: 'warning',
            title:'Oops',
            text: resultado
          }).then((result) => {
            location.reload();
          });
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
    $.ajax({
        type: "POST",
        url: "../controlador/c_consulta.php"
    })
    .done(function(resultado){
        console.log(resultado);
try{
        const result = JSON.parse(resultado);
        var $dropdown = $("#idTipoDocu");
        $.each(result, function() {
            $dropdown.append($("<option />").val(this.idDocumento).text(this.tipoDocumento));
        });
    }catch(error){
        $("#resultado").removeClass("alert-success");
        $("#resultado").addClass("alert-danger");
        $("#resultado").show();
        $("#resultado").text('ha ocurrido un error inesperado consultando los tipos de documentos');
    }
    });
}

function login(){
    var datos= $("#formLogin").serialize();
    
    if (validarCampoVacio($("#passwordLogin").val().length ,'Por favor ingrese una contraseña')) {
        return false;
    }

    if (validarCampoVacio($("#emailLogin").val().length ,'Por favor ingrese un email')) {
        return false;
    }

    $.ajax({
        type: "POST",
        url: "../controlador/c_login.php",
        data: datos
    })
    .done(function(resultado){
        console.log(resultado);
        this.resultado=parseInt(resultado);
        switch(this.resultado){
            case 1:
                window.location="../vista/admin/v_admin.php";
                break;
            case 2:
                window.location="../pendiente.php";
                break;
            case 3:
                window.location="../vista/cliente/v_cliente.php";
                break;
            default:
                $("#resultadoLogin").show();
                $("#resultadoLogin").text(resultado);             
                break;
        }
    });
}

