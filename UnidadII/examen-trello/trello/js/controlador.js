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
				$("#tableros").val(null);
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});


$("#tableros").change(function(){
	console.log('Peticion AJAX para obtener la listas del tablero '+$("#tableros").val());
	$("#div-listas").html("");
	$.ajax({
		url:"ajax/listas.php?accion=listar&codigoTablero="+$("#tableros").val(),
		dataType:"json",
		success:function(res){
			console.log(res);
			for(var i=0;i<res.length;i++){
				$("#div-listas").append(`
				<div class="well list" id="div-lista-1">
					<h4>${res[i].nombreLista}</h4>
					<p><textarea class="form-control" placeholder="Tarea" id="txt-tarjeta-lista-1"></textarea>
					<input type="date" class="form-control date" name="txt-fecha-lista-1" placeholder="Fecha">
					<button class="btn btn-default" role="button"  onclick="agregarTarjeta(1);">Agregar tarjeta</button></p>
				</div>
				`);
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});