<?php
    include("../class/class-tarjeta.php");
    switch($_GET["accion"]){
        case "guardar":
            $tarjeta = new Tarjeta(
                null,
                $_POST["codigoLista"],
                $_POST["contenidoTarjeta"],
                $_POST["codigoUsuario"],
                "12/12/2012"
            );
            $tarjeta->guardarTarjeta();
            echo '{"resultado":"OK"}';
        break;
    }
?>