$('#btn-guardar').click(function(){
    console.log('Ejecutar peticion asincrona');
    $("#respuesta").html("Cargando...");
    var parametros = 
        'nombre='+$("#nombre").val()+"&"+
        'apellido='+$("#apellido").val()+"&"+
        'email='+$("#email").val()+"&"+
        'usuario='+$("#usuario").val()+"&"+
        'pais='+$("#pais").val()+"&"+
        'password='+$("#password").val();

    console.log("Esto se enviará al servidor: "+parametros);

    //Funcion de jquery para peticiones asincronas.
    $.ajax({
        url:"ajax/guardar-usuario.php",
        method:"POST",
        data:parametros, //La información en formato URLEncoded
        dataType: 'json', //tipo de dato de retorno, por defecto es html
        success:function(respuesta){
            //Se ejecutara cuando sea exitoso
            //console.log("Respuesta del servidor: " + JSON.stringify(respuesta));
            console.log(respuesta);
            $("#respuesta").html("Se guardo el registro de " + respuesta.nombre);
            $("#usuarios").append(`<tr>
                <td>${respuesta.nombre}</td>
                <td>${respuesta.apellido}</td>
                <td>${respuesta.email}</td>
                <td>${respuesta.usuario}</td>
                <td>${respuesta.pais}</td>
                <td>${respuesta.password}</td>
            </tr>`);
        },
        error:function(error){
            //Se ejecutara cuando sea erroneo
            console.error(error);
        }
    });
});
$(document).ready(function(){
    //Aquí el DOM ha sido cargado..
    console.log('Obtener lista de usuarios');
    $.ajax({
        url:"ajax/obtener-usuarios.php",
        dataType:"json",
        success:function(respuesta){
            console.log("La respuesta del servidor es: ");
            console.log(respuesta);
            for(var i=0;i<respuesta.length;i++){
                $("#usuarios").append(`<tr>
                    <td>${respuesta[i].nombre}</td>
                    <td>${respuesta[i].apellido}</td>
                    <td>${respuesta[i].email}</td>
                    <td>${respuesta[i].usuario}</td>
                    <td>${respuesta[i].pais}</td>
                    <td>${respuesta[i].password}</td>
                </tr>`);
            }
        },
        error:function(error){
            console.log(error);
        }
    });
});