 
<?php 

class Noticia{
    private $titulo;
    public $descripcion;
    public $fechaPublicacion;
    public $resumen;
    public $autor;
    public $imagenCaratula;

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function guardarNoticia(){
        echo "SE guardara";
    }

    public function eliminarNoticia(){
        echo "Se eliminara";
    }

    public function actualizarNoticia(){
        echo "Se actualizara";
    }

    public function listarNoticias(){
        echo "Se listaran las noticias";
    }
}

?>