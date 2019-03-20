<?php
    $archivo = fopen('usuarios.json','a+'); //r Lectura, w Escritura, a+ Anexar
    fwrite($archivo,json_encode($_POST)."\n"); //Convertir arreglo a cadena JSON
    fclose($archivo);
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
    Se guardo la información.
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
        <body>
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
            
        </body>
    </table>
    
</body>
</html>


<?php
/*
echo "<b>Información enviada por el cliente:</b> <br>";
var_dump($_POST);
echo "<br><br>";
echo "<b>Usuario ingresado:</b> ".$_POST['nombre']." ".$_POST['apellido'];*/

?>