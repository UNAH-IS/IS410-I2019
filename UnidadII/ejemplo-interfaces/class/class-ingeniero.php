<?php  
    include("interfaces/interface-humano.php");
    include("interfaces/interface-animal.php");
    class Ingeniero implements Humano, Animal{
        function vivir(){
            echo "Ingeniero pocas veces vive<br>";
        }
        function morir(){
            echo "Ingeniero muere siempre<br>";
        }
        function nacer(){
            echo "Ingeniero nacio para morir<br>";
        }
        function reproducir(){
            echo "NA<br>";
        }
        function destruir(){
            echo "Destruir<br>";
        }
        function cazar(){
            echo "Cazar!!!<br>";
        }
    }
?>