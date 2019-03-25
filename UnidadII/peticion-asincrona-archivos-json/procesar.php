<?php
    //Simular una tarea que se tarda 10 segundos
    sleep(1);
    $archivo = fopen('usuarios.json','a+'); //r Lectura, w Escritura, a+ Anexar
    fwrite($archivo,json_encode($_POST)."\n"); //Convertir arreglo a cadena JSON
    fclose($archivo);
    echo json_encode($_POST);
?>