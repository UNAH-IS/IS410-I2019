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


        //El metodo obtener listas quedo algo complejo debido a la necesidad de obtener toda la información asociada a las listas
        //es decir este metodo retorna todas las listas con sus respectivas tarjetas y ademas retorna el usuario asociado a cada tarjeta,
        //Para entender bien el JSON resultante es recomendable que de un vistazo al resultado impreso en la consola del navegador
        //observará que aparecen las listas, cada lista tiene un atributo que se llama tarjetas el cual es un arreglo y cada
        //tarjeta tiene un atributo que se llama usuario el cual tiene un json con todo el detalle del usuario.
        public static function obtenerListas($codigoTablero){
                $registrosListas = json_decode(file_get_contents("../data/listas.json"),true);
                $registrosTarjetas = json_decode(file_get_contents("../data/tarjetas.json"),true);
                $registrosUsuarios = json_decode(file_get_contents("../data/usuarios.json"),true);
                $resultado = array();
                $indiceResultado = 0;
                $indiceTarjetas = 0;
                for ($i=0;$i<count($registrosListas);$i++){
                        if ($registrosListas[$i]["codigoTablero"]==$codigoTablero){
                                $resultado[$indiceResultado] = $registrosListas[$i];//Utilizo la variable $indiceResultado porque necesito ir guardando el indice de los elementos guardados
                                //Recorrer toooodas las tarjetas para identificar cual pertenece a una lista especifica.
                                $indiceTarjetas = 0;
                                $resultado[$indiceResultado]["tarjetas"]=array();
                                for ($j=0;$j<count($registrosTarjetas);$j++){
                                        //Verifica el codigo de lista de una lista especifica y lo compara con el codigo de lista de las tarjetas
                                        //En caso de ser correcto lo anexa a un nuevo item en el resultado a enviar.
                                        if($registrosListas[$i]["codigoLista"]==$registrosTarjetas[$j]["codigoLista"]){
                                                $resultado[$indiceResultado]["tarjetas"][$indiceTarjetas] = $registrosTarjetas[$j];
                                                //Recorrer todos los usuarios para saber cual es el usuario correspondiente asociado a cada tarjeta y anexarlo al resultado
                                                for ($k=0;$k<count($registrosUsuarios);$k++){
                                                        if($registrosTarjetas[$j]["codigoUsuario"]==$registrosUsuarios[$k]["codigoUsuario"]){
                                                                $resultado[$indiceResultado]["tarjetas"][$indiceTarjetas]["usuario"]=$registrosUsuarios[$k];
                                                        }
                                                }
                                                $indiceTarjetas++;
                                        }
                                }
                                $indiceResultado++;
                        }
                }
                $registrosListas = null;
                return json_encode($resultado);
        }
    }
?>