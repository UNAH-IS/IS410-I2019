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
        
        </tbody>
    </table>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>