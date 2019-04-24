<?php
    include("../class/class-tablero.php");
    switch($_GET["accion"]){
        case "listar":
            echo Tablero::obtenerTableros();
        break;
    }
?>