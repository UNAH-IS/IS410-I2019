<?php
class Persona{
    private $nombre;
    private $apellido;
    private $correo;
    private $usuario;
    private $pais;
    private $contrasena;

    public function __construct(
        $nombre,
        $apellido,
        $correo,
        $usuario,
        $pais,
        $contrasena
    ){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->pais = $pais;
        $this->contrasena = $contrasena;
    }


    /**
     * Get the value of nombre
     */ 
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido(){
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo(){
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo){
        $this->correo = $correo;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario(){
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function __toString(){
        $a["nombre"] = $this->nombre;
        $a["apellido"] = $this->apellido;
        $a["email"] = $this->correo;
        $a["usuario"] = $this->usuario;
        $a["pais"] = $this->pais;
        $a["password"] = $this->contrasena;
        return json_encode($a);
    }

    //CRUD -> CreateReadUpdateDelete 
    public function guardar(){
        $archivo = fopen('../data/usuarios.json','a+'); //r Lectura, w Escritura, a+ Anexar
        fwrite($archivo,$this->__toString()."\n"); //Convertir arreglo a cadena JSON
        fclose($archivo);
        return $this->__toString();
    }

    public function actualizar(){

    }

    public function eliminar(){

    }

    public static function listar(){
        $archivo = fopen("../data/usuarios.json","r");
        $respuesta = array();
        while(($linea=fgets($archivo))){
            $respuesta[] = json_decode($linea,true); //Convertir de cadena JSON a arreglo asociativo
        }
        fclose($archivo);
        return json_encode($respuesta);
    }
}

?>