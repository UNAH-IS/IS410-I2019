<?php 
    class Tablero{
        private $codigoTablero;
        private $titulo;

        public function __construct(
            $codigoTablero,
            $titulo
        ){
            $this->codigoTablero = $codigoTablero;
            $this->titulo = $titulo;
        }


        /**
         * Get the value of codigoTablero
         */ 
        public function getCodigoTablero()
        {
                return $this->codigoTablero;
        }

        /**
         * Set the value of codigoTablero
         *
         * @return  self
         */ 
        public function setCodigoTablero($codigoTablero)
        {
                $this->codigoTablero = $codigoTablero;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }


        public static function obtenerTableros(){
            return file_get_contents("../data/tableros.json");
        }
    }
?>