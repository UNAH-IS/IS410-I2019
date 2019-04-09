<?php
    include("../class/class-persona.php");
    switch($_GET["accion"]){
        case "guardar":             
                $p = new Persona(
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['email'],
                        $_POST['usuario'],
                        $_POST['pais'],
                        $_POST['password']
                );
                
                echo $p->guardar(); //Esto es lo que se le envia al cliente
            break;
        case "listar":
                echo Persona::listar(); //Esto lo envia al cliente
            break;
        case "eliminar":
                break;
        case "actualizar":
                break;
        default:
                echo '{"mensaje":"Acción inválida"}';
                break;
    }
?>