$("#btn-login").click(function(){
	$("#form-login").fadeOut(50);
	$("#user-details").html("Mostrar esto en caso de que el usuario se haya logeado con exito, mostrar su nombre.");
	$("#user-details").fadeIn(50);
});

$("#btn-agregar-lista").click(function(){
	alert("Agregar una lista con el titulo " + $("#txt-texto-tarjeta").val());
});

function agregarTarjeta(numeroLista){
	alert("Ejecutar peticion AJAX para agregar tarjeta a la lista: " + numeroLista + ", El contenido de la tarjeta es: "+$("#txt-tarjeta-lista-" + numeroLista).val());
}

$(document).ready(function(){
	$.ajax({
		url:"ajax/usuarios.php?accion=listar",
		dataType:"json",
		success:function(res){
			console.log(res);
			for(var i=0;i<res.length;i++){
				$("#usuarios").append(`<label><input type="radio" value="${res[i].codigoUsuario}" name="rbt-codigo-usuario"><img src="${res[i].imagen}" class="img-responsive img-thumbnail"></label>&nbsp;`);
			}
		},
		error:function(error){
			console.error(error);
		}
	});

	$.ajax({
		url:"ajax/tableros.php?accion=listar",
		dataType:"json",
		success:function(res){
			console.log(res);
			for(var i=0;i<res.length;i++){
				$("#tableros").append(`<option value="${res[i].codigoTablero}">${res[i].titulo}</option>`);
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});
