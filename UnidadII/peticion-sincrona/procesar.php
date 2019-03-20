<?php
    $archivo = fopen('usuarios.csv','a+'); //r Lectura, w Escritura, a+ Anexar
    fwrite($archivo, 
            $_POST['nombre'].','.
            $_POST['apellido'].','.
            $_POST['email'].','.
            $_POST['usuario'].','.
            $_POST['pais'].','.
            $_POST['password']."\n"
        );
    
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
                $archivo = fopen("usuarios.csv","r");
                while(($linea = fgets($archivo))){
                    $partes = explode(",",$linea); //Retorna un arreglo en el cual se guarda en cada item un token
                    echo '
                        <tr>
                            <td>'.$partes[0].'</td>
                            <td>'.$partes[1].'</td>
                            <td>'.$partes[2].'</td>
                            <td>'.$partes[3].'</td>
                            <td>'.$partes[4].'</td>
                            <td>'.$partes[5].'</td>
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