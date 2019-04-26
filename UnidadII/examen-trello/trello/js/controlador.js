$("#btn-login").click(function(){
	$("#form-login").fadeOut(50);
	$("#user-details").html("Mostrar esto en caso de que el usuario se haya logeado con exito, mostrar su nombre.");
	$("#user-details").fadeIn(50);
});

$("#btn-agregar-lista").click(function(){
	alert("Agregar una lista con el titulo " + $("#txt-texto-tarjeta").val());
});

function agregarTarjeta(codigoLista){
	console.log("Ejecutar peticion AJAX para agregar tarjeta a la lista: " + codigoLista + ", El contenido de la tarjeta es: "+$("#txt-tarjeta-lista-" + codigoLista).val());
	var parametros = "codigoLista="+codigoLista+"&contenidoTarjeta="+$("#txt-tarjeta-lista-" + codigoLista).val()+"&codigoUsuario="+$("input[name='rbt-codigo-usuario']:checked").val();
	console.log(parametros);
	$.ajax({
		url:"ajax/tarjetas.php?accion=guardar",
		method:"POST",
		data:parametros,
		dataType:"json",
		success:function(res){
			console.log(res);
			if(res.resultado = 'OK'){
				$("#tarjetas-lista-"+codigoLista).append(
					`<div class="well card">
						<p>
						<img src="" class="img-responsive img-thumbnail">
						${$("#txt-tarjeta-lista-" + codigoLista).val()}
						<br><span class="small-date">12/12/2012</span>
						</p>
					</div>`
				);
			}
		},
		error:function(error){
			console.error(error);
		}
	});
	
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
				var lista='';
				lista += `
				<div class="col-lg-4 col-md-4">
					<div class="well list" id="div-lista-${res[i].codigoLista}">
						<h4>${res[i].nombreLista}</h4>
						<div id="tarjetas-lista-${res[i].codigoLista}">`;
				//Generar las tarjetas:
				for(var j=0;j<res[i].tarjetas.length;j++){
					lista+=
						`<div class="well card">
							<p>
							<img src="${res[i].tarjetas[j].usuario.imagen}" class="img-responsive img-thumbnail">
							${res[i].tarjetas[j].contenidoTarjeta}
							<br><span class="small-date">12/12/2012</span>
							</p>
						</div>`;
				}

				lista += `
						</div>
						<p><textarea class="form-control" placeholder="Tarea" id="txt-tarjeta-lista-${res[i].codigoLista}"></textarea>
						<input type="date" class="form-control date" name="txt-fecha-lista-${res[i].codigoLista}" placeholder="Fecha">
						<button class="btn btn-default" role="button"  onclick="agregarTarjeta(${res[i].codigoLista});">Agregar tarjeta</button></p>
					</div>
				</div>
				`;
				$("#div-listas").append(lista);
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});