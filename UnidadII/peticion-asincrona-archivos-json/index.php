<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form>
        <input value="Juan" id="nombre" type="text" placeholder="Nombre"><br>
        <input value="Perez" id="apellido" type="text" placeholder="Apellido"><br>
        <input value="jperez@gmail.com" id="email" type="text" placeholder="Email" onkeyup="validarCorreo(this);"><br>
        <input value="jperez" id="usuario" type="text" placeholder="Usuario"><br>
        <select id="pais">
            <option value="Honduras">Honduras</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Costarica">Costarica</option>
            <option value="Panama">Panama</option>
            <option value="El Salvador">El Salvador</option>
        </select>
        <input value="asd.456" id="password" type="password" placeholder="Password"><br>        
        <button id="btn-guardar" type="button">Guardar</button>
    </form>
    <div id="respuesta">
    </div>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Pais</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody id="usuarios">
        <?php
            $archivo = fopen("usuarios.json","r");
            while(($linea = fgets($archivo))){
                $persona = json_decode($linea,true);//Convertir de cadena JSON a un arreglo asociativo
                echo '
                    <tr>
                        <td>'.$persona["nombre"].'</td>
                        <td>'.$persona["apellido"].'</td>
                        <td>'.$persona["email"].'</td>
                        <td>'.$persona["usuario"].'</td>
                        <td>'.$persona["pais"].'</td>
                        <td>'.$persona["password"].'</td>
                    </tr>';
            }
            fclose($archivo);
        ?>
        </tbody>
    </table>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
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
                url:"procesar.php",
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
    </script>
</body>
</html>