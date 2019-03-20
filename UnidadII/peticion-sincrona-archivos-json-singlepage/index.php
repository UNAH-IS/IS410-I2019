<?php
    
    if (!isset($_POST["nombre"])){//isset se utiliza para verificar si una variable esta inicializada.
        $archivo = fopen('usuarios.json','a+'); //r Lectura, w Escritura, a+ Anexar
        fwrite($archivo,json_encode($_POST)."\n"); //Convertir arreglo a cadena JSON
        fclose($archivo);
        echo "Se guardo la información";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="index.php" method="POST">
        <input value="Juan" name="nombre" type="text" placeholder="Nombre"><br>
        <input value="Perez" name="apellido" type="text" placeholder="Apellido"><br>
        <input value="jperez@gmail.com" name="email" type="text" placeholder="Email" onkeyup="validarCorreo(this);"><br>
        <input value="jperez" name="usuario" type="text" placeholder="Usuario"><br>
        <select name="pais">
            <option value="Honduras">Honduras</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Costarica">Costarica</option>
            <option value="Panama">Panama</option>
            <option value="El Salvador">El Salvador</option>
        </select>
        <input value="asd.456" name="password" type="password" placeholder="Password"><br>        
        <button type="submit">Registro</button>
    </form>
    <hr>
    <h1>Informacion del archivo</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Pais</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
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
</body>
</html>