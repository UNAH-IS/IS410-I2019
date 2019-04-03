<?php
    include("encabezado.php");

    include("class/class-noticia.php");
    include("class/class-autor.php");
    $a = new Autor("Juan","Perez","M",33,"jperez@gmail.com");

    $n = new Noticia(
            "El Ayuwoki anda suelto",
            "Lorem ipsum...",
            "12/12/2012",
            "Lorem ipsum",
            $a,
            "img/01.jpg",
            ["img/1.jpg","img/3.jpg","img/2.jpg"],
            "Yamaranguila"
    );
    //$n->setTitulo("El Ayuwoki anda suelto");
    echo "<h1>".$n."</h1>";
    $n->guardar();
    $n->actualizar();
    $n->eliminar();
    $n->listar();
    // :: Paamayim Nekudotayim   o_o
    Noticia::$piePagina = "<br><b>Este es el pie de pagina en el atributo estatico de clase noticia de este ejercicio del dia de hoy martes de este periodo....</b>";
    echo Noticia::$piePagina;
    echo $n::$piePagina;
    /*int a = 23;
    Noticia n = new Noticia();//Instanciación
    n.titulo = "El Ayuwoki anda suelto"
    NombreClase objeto = new NombreClase();*/

    include("pie.php");
?>

