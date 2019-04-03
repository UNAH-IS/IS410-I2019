<?php
    class Autor{
        private $nombre;
        private $apellido;
        private $genero;
        private $edad;
        private $correo;

        public function __construct(
            $nombre,
            $apellido,
            $genero,
            $edad,
            $correo
        ){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->genero = $genero;
            $this->edad = $edad;
            $this->correo = $correo;
        }
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;

            return $this;
        }

        /**
         * Get the value of genero
         */ 
        public function getGenero()
        {
            return $this->genero;
        }

        /**
         * Set the value of genero
         *
         * @return  self
         */ 
        public function setGenero($genero)
        {
            $this->genero = $genero;

            return $this;
        }

        /**
         * Get the value of edad
         */ 
        public function getEdad()
        {
            return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @return  self
         */ 
        public function setEdad($edad)
        {
            $this->edad = $edad;

            return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
            return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
            $this->correo = $correo;

            return $this;
        }

        public function __toString(){
            $a["nombre"]=$this->nombre;
            $a["apellido"]=$this->apellido;
            $a["edad"]=$this->edad;
            $a["genero"]=$this->genero;
            $a["correo"]=$this->correo;

            return json_encode($a);
        }

        public function toArray(){
            $a["nombre"]=$this->nombre;
            $a["apellido"]=$this->apellido;
            $a["edad"]=$this->edad;
            $a["genero"]=$this->genero;
            $a["correo"]=$this->correo;
            return $a;
        }
}

?>