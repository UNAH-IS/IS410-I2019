<?php
    include("encabezado.php");

    include("class/class-noticia.php");
    $a = 23;
    $n = new Noticia();
    $n->setTitulo("El Ayuwoki anda suelto");
    echo "<h1>".$n->getTitulo()."</h1>";
    /*int a = 23;
    Noticia n = new Noticia();//Instanciación
    n.titulo = "El Ayuwoki anda suelto"
    NombreClase objeto = new NombreClase();*/

    include("pie.php");
?>
