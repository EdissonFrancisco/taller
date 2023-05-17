<?php
include 'conexion.php';

class consultas {
    private $conexiones;

    public function consultas() {
        $this -> conexiones = new conexion();
    }

    function consultaDatos() {
        $this->conexiones->abrir();
        $sentencia =  'SELECT id, nombre, apellido, cedula FROM usuarios';
        $this -> conexiones -> ejecutar($sentencia);
        $this -> conexiones -> cerrar();
        

    }

}

?>