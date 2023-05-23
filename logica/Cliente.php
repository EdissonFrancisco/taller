<?php 
    require_once '../persistencia/Conexion.php';
    require_once '../persistencia/ClienteDAO.php';    
    
    class Cliente {
                                        
        private $idCliente;
        private $nombre;
        private $apellido;
        private $nit_cc;
        private $direccion;
        private $correo;
        private $clave;
        private $estado;
        private $conexion;
        private $clienteDAO;

        public function getIdCliente()
        {
            return $this->idCliente;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function getNit_cc()
        {
            return $this->nit_cc;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }

        public function getCorreo()
        {
            return $this->correo;
        }

        public function getClave()
        {
            return $this->clave;
        }

        public function getEstado()
        {
            return $this->estado;
        }

        public function __construct($pIdCliente="", $pNombre="", $pApellido="", $pNit_cc="", $pDireccion="", $pCorreo="", $pClave="", $pEstado="") {
            $this -> idCliente = $pIdCliente;
            $this -> nombre = $pNombre;
            $this -> apellido = $pApellido;
            $this -> nit_cc = $pNit_cc;
            $this -> direccion = $pDireccion;
            $this -> correo = $pCorreo;
            $this -> clave = $pClave;
            $this -> estado = $pEstado;
            $this->conexion = new Conexion();
            $this -> clienteDAO = new ClienteDAO($this->idCliente, $this->nombre, $this->apellido, $this->nit_cc, $this->direccion, $this->correo, $this->clave, $this->estado);
        }
        
        public function validar($pCorreo) {/** consulta que el correo no se encuentre registrado */
            $this->conexion->abrir();
            $this -> conexion -> ejecutar($this -> clienteDAO -> validar($pCorreo));
            $this -> conexion -> cerrar();
            if($this -> conexion -> numFilas() == 1){
                $this -> idTelCli = $this -> conexion -> extraer()[0];
                return true;
            }else{
                return false;
            }
        }

        function crearCliente($nombre, $apellido, $CC, $direc, $correo, $clave){/** inserta datos de cliente en la BD */
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> clienteDAO -> crearCliente($nombre, $apellido, $CC, $direc, $correo, $clave));
            $this -> conexion -> cerrar();
        }
        
        function consultarID() {
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> clienteDAO -> consultarID());
            $this -> conexion -> cerrar();
            $resultado = $this -> conexion -> extraer()[0];
            return $resultado;
        }
        
        function autentica() {
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> clienteDAO -> autenticar());
            $this -> conexion -> cerrar();
            if($this -> conexion -> numFilas() == 1){
                $this -> idCliente = $this -> conexion -> extraer()[0];
                return true;
            }else{
                return false;
            }
        }

        function consultar() {/* consulto los datos prinsipales del cliente: nombre apellido correo estado */
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> clienteDAO -> consultar());
            $this -> conexion -> cerrar();
            $resultado = $this -> conexion -> extraer();
            $this -> nombre = $resultado[0];
            $this -> apellido = $resultado[1];
        }

    }