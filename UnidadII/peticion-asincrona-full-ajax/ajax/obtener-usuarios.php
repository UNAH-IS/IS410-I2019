<?php
    $archivo = fopen("../data/usuarios.json","r");
    $respuesta = array();
    while(($linea=fgets($archivo))){
        $respuesta[] = json_decode($linea,true); //Convertir de cadena JSON a arreglo asociativo
    }
    echo json_encode($respuesta);
    fclose($archivo);

?>