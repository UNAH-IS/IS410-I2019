<?php 
    class Tarjeta{
            public $codigoTarjeta;
            public $codigoLista;
            public $contenidoTarjeta;
            public $codigoUsuario;
            public $fechaCreacion;

            public function __construct(
                $codigoTarjeta,
                $codigoLista,
                $contenidoTarjeta,
                $codigoUsuario,
                $fechaCreacion
            ){
                $this->codigoTarjeta = $codigoTarjeta;
                $this->codigoLista = $codigoLista;
                $this->contenidoTarjeta = $contenidoTarjeta;
                $this->codigoUsuario = $codigoUsuario;
                $this->fechaCreacion = $fechaCreacion;
            }

            

            /**
             * Get the value of codigoTarjeta
             */ 
            public function getCodigoTarjeta()
            {
                        return $this->codigoTarjeta;
            }

            /**
             * Set the value of codigoTarjeta
             *
             * @return  self
             */ 
            public function setCodigoTarjeta($codigoTarjeta)
            {
                        $this->codigoTarjeta = $codigoTarjeta;

                        return $this;
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
             * Get the value of contenidoTarjeta
             */ 
            public function getContenidoTarjeta()
            {
                        return $this->contenidoTarjeta;
            }

            /**
             * Set the value of contenidoTarjeta
             *
             * @return  self
             */ 
            public function setContenidoTarjeta($contenidoTarjeta)
            {
                        $this->contenidoTarjeta = $contenidoTarjeta;

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

            /**
             * Get the value of fechaCreacion
             */ 
            public function getFechaCreacion()
            {
                        return $this->fechaCreacion;
            }

            /**
             * Set the value of fechaCreacion
             *
             * @return  self
             */ 
            public function setFechaCreacion($fechaCreacion)
            {
                        $this->fechaCreacion = $fechaCreacion;

                        return $this;
            }

            public function guardarTarjeta(){
                $tarjetas = json_decode(file_get_contents("../data/tarjetas.json"),true);
                
                $t["codigoTarjeta"]=($tarjetas[count($tarjetas)-1]["codigoTarjeta"])+1;
                $t["codigoLista"]=$this->codigoLista;
                $t["contenidoTarjeta"]=$this->contenidoTarjeta;
                $t["codigoUsuario"]=$this->codigoUsuario;
                $t["fechaCreacion"]=$this->fechaCreacion;
                
                $tarjetas[] = $t;
                $archivo = fopen("../data/tarjetas.json","w");
                fwrite($archivo, json_encode($tarjetas));
            }
    }
?>