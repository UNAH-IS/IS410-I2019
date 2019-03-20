<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        //Comentarios de una linea
        /*
        Comentarios de multiples lineas
        */
        #Comentarios de una linea
        $nombre = 'Pedro';
        echo "El nombre es $nombre<br>";

        $persona['nombre']='Juan';
        $persona['apellido']='Martinez';
        $persona['genero']='M';
        $persona['edad']='22';

        /*$fecha['dia'] = '12';
        $fecha['mes'] = '12';
        $fecha['anio'] = '2012';*/
        $persona['fecha']=array('dia'=>12,'mes'=>12,'anio'=>2012);
        
        
        /*
        JSON equivalente en JS
        var persona = {
            nombre:'Juan',
            apellido:'Martinez',
            edad:'22',
            genero:'M',
            fecha:{
                dia:'12',
                mes:'12',
                anio:'2012'
            }
        }
        */
        /*
        echo 'Recorrer el arreglo asociativo con un foreach';
        foreach($persona as $indice=>$valor){
	        echo "Item: " . $indice . ": " . $valor;
	        echo "<br>";
        }*/
        
        var_dump($persona);
        //echo 'Hola '.$persona['nombre'];
        //$paises = array(indice1=>valor1, indice2=>valor2 ... indiceN=>valorN);
        $paises = array(0=>'Honduras', 1=>'Nicaragua', 3=>'Panama');
        echo '<br>';
        var_dump($paises);
        echo '<br>JSON resultante'.json_encode($persona);
    ?>
</body>
</html>