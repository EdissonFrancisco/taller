<?php 
    require_once '../persistencia/Conexion.php';
    require_once '../persistencia/TelClienteDAO.php';
    
    class TelCliente {
        private $idTelCli;
        private $idCliente;
        private $telefono;
        private $conexion;
        private $telclienteDAO;

        public function getIdTelCli()
        {
            return $this->idTelCli;
        }
        
        public function getIdCliente()
        {
            return $this->idCliente;
        }

        public function getTelefono()
        {
            return $this->telefono;
        }
        
        public function __construct($pIdTelCli="", $pIdCliente="", $pTelefono=""){
            $this -> idTelCli = $pIdTelCli;
            $this -> idCliente = $pIdCliente;
            echo '<br>' . $this->idCliente . '<br>';
            $this -> telefono = $pTelefono;
            echo '<br>' . $this->telefono . '<br>';
            $this -> conexion = new Conexion();
            $this -> telclienteDAO = new TelClienteDAO($this->idTelCli, $this->idCliente, $this->telefono);
        }

        function crearTel() {
            try {                
                $this->conexion->abrir();
                $this->conexion->ejecutar($this->telclienteDAO->crearTele($this->idCliente, $this->telefono));
                $this->conexion->cerrar();
            } catch (Exception $e) {
                // Manejo de errores específico para esta función
                echo "Error al crear teléfono: " . $e->getMessage();
            }
        }
        
        function consultar() {
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> telclienteDAO -> consulta());
            $this -> conexion -> cerrar();
            $resultado = $this -> conexion -> extraer();
            $this -> telefono = $resultado[0];
        }
        
    }
