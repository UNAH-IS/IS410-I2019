<?php
    switch($_GET["accion"]){
        case 'listar':
            include("../class/class-usuario.php");
            echo Usuario::obtenerUsuarios();
        break;
        default:
            echo '{"status":0,"mensaje":"Acción no válida"}';
    }
?>