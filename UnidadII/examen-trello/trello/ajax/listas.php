<?php
    include("../class/class-lista.php");
    switch($_GET["accion"]){
        case "listar":
            echo Lista::obtenerListas($_GET["codigoTablero"]);
        break;
    }
?>