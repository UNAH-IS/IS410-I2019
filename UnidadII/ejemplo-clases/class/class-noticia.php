<?php 
/*
PlainOldJavaObject
*/
include("class-contenido.php");

class Noticia extends Contenido {
    private $imagenes;
    private $lugar;
    public static $piePagina;

    public function __construct(
            $titulo,
            $descripcion,
            $fechaPublicacion,
            $resumen,
            $autor,
            $imagenCaratula,
            $imagenes, 
            $lugar){
        parent::__construct(
            $titulo,
            $descripcion,
            $fechaPublicacion,
            $resumen,
            $autor,
            $imagenCaratula
        ); //Equivalente a super en JAVA
        $this->imagenes = $imagenes;
        $this->lugar = $lugar;
    }

    /**
     * Get the value of imagenes
     */ 
    public function getImagenes(){
        return $this->imagenes;
    }

    /**
     * Set the value of imagenes
     *
     * @return  self
     */ 
    public function setImagenes($imagenes){
        $this->imagenes = $imagenes;
    }

    /**
     * Get the value of lugar
     */ 
    public function getLugar(){
        return $this->lugar;
    }

    /**
     * Set the value of lugar
     *
     * @return  self
     */ 
    public function setLugar($lugar){
        $this->lugar = $lugar;
    }

    public function __toString(){
        $a["titulo"] = $this->titulo;
        $a["descripcion"] = $this->descripcion;
        $a["fechaPublicacion"] = $this->fechaPublicacion;
        $a["resumen"] = $this->resumen;
        $a["autor"] = $this->autor->toArray();;
        $a["imagenCaratula"] = $this->imagenCaratula;
        $a["imagenes"] = $this->imagenes;
        $a["lugar"] = $this->lugar;
        return json_encode($a);
    }

    public function guardar(){
        echo "Guardar";
    }

    public function eliminar(){
        echo "Eliminar";
    }

    public function actualizar(){
        echo "Actualizar";
    }

    public function listar(){
        echo "Listar";
    }

}

?>