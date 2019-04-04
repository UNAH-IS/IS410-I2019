<?php
   include("../class/class-persona.php");
   $p = new Persona(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['email'],
            $_POST['usuario'],
            $_POST['pais'],
            $_POST['password'],
    );
    
    echo $p->guardar(); //Esto es lo que se le envia al cliente
?>