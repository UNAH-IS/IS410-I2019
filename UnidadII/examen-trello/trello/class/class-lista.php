<?php 
    class Lista{
        private $codigoLista;
        private $nombreLista;
        private $codigoUsuario;

        public function __construct(
            $codigoLista,
            $nombreLista,
            $codigoUsuario
        ){
            $this->codigoLista = $codigoLista;
            $this->nombreLista = $nombreLista;
            $this->codigoUsuario = $codigoUsuario;
        }

        

        /**
         * Get the value of codigoLista
         */ 
        public function getCodigoLista()
        {
                return $this->codigoLista;
        }

        /**
         * Set the value of codigoLista
         *
         * @return  self
         */ 
        public function setCodigoLista($codigoLista)
        {
                $this->codigoLista = $codigoLista;

                return $this;
        }

        /**
         * Get the value of nombreLista
         */ 
        public function getNombreLista()
        {
                return $this->nombreLista;
        }

        /**
         * Set the value of nombreLista
         *
         * @return  self
         */ 
        public function setNombreLista($nombreLista)
        {
                $this->nombreLista = $nombreLista;

                return $this;
        }

        /**
         * Get the value of codigoUsuario
         */ 
        public function getCodigoUsuario()
        {
                return $this->codigoUsuario;
        }

        /**
         * Set the value of codigoUsuario
         *
         * @return  self
         */ 
        public function setCodigoUsuario($codigoUsuario)
        {
                $this->codigoUsuario = $codigoUsuario;

                return $this;
        }

        public static function obtenerListas($codigoTablero){
                $registros = json_decode(file_get_contents("../data/listas.json"),true);
                $resultado = array();
                for ($i=0;$i<count($registros);$i++){
                        if ($registros[$i]["codigoTablero"]==$codigoTablero){
                                $resultado[] = $registros[$i];
                        }
                }
                $registros = null;
                return json_encode($resultado);
        }
    }
?>