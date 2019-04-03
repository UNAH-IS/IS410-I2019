<?php
    abstract class Contenido{
        protected $titulo;
        protected $descripcion;
        protected $fechaPublicacion;
        protected $resumen;
        protected $autor;
        protected $imagenCaratula;

        public function __construct(
                    $titulo,
                    $descripcion,
                    $fechaPublicacion,
                    $resumen,
                    $autor,
                    $imagenCaratula
        ){
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->fechaPublicacion = $fechaPublicacion;
            $this->resumen = $resumen;
            $this->autor = $autor;
            $this->imagenCaratula = $imagenCaratula;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        
        public function getTitulo(){
            return $this->titulo;
        }

        abstract public function guardar();
        abstract public function eliminar();
        abstract public function actualizar();
        abstract public function listar();
        
        public function __toString(){
            $a["titulo"] = $this->titulo;
            $a["descripcion"] = $this->descripcion;
            $a["fechaPublicacion"] = $this->fechaPublicacion;
            $a["resumen"] = $this->resumen;
            $a["autor"] = $this->autor;
            $a["imagenCaratula"] = $this->imagenCaratula;
            return json_encode($a);
        }
    }

?>