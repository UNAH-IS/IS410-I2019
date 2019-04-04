<?php 
include("interfaces/interface-ser-vivo.php");
interface Humano extends SerVivo{
    const ALTURA_PROMEDIO = 1.88;

    function destruir();
}
?>