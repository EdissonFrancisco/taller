<?php 
    require_once 'persistencia/Conexion.php';
    require_once 'persistencia/Clientesql.php';
    
    class Cliente {
                                        
        private $idCliente;
        private $nombre;
        private $apellido;
        private $nit_cc;
        private $direccion;
        private $correo;
        private $clave;
        private $estado;
        private $conecxion;
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

        public function Cliente($pIdCliente="", $pNombre="", $pApellido="", $pNit_cc="", $pDireccion="", $pCorreo="", $pClave="", $pEstado="") {
            $this -> idCliente = $pIdCliente;
            $this -> nombre = $pNombre;
            $this -> apellido = $pApellido;
            $this -> nit_cc = $pNit_cc;
            $this -> direccion = $pDireccion;
            $this -> correo = $pCorreo;
            $this -> clave = $pClave;
            $this -> estado = $pEstado;
            $this -> conecxion = new Conexion();
            $this -> clienteDAO = new ClienteDAO($this->idCliente, $this->nombre, $this->apellido, $this->nit_cc, $this->direccion, $this->correo, $this->clave, $this->estado);
        }
        
        public function validar($pCorreo) {/** consulta que el correo no se encuentre registrado */
            $this -> conecxion -> abrir();
            $this -> conecxion -> ejecutar($this -> clienteDAO -> validar($pCorreo));
            $this -> conecxion -> cerrar();
            if($this -> conecxion -> numFilas() == 1){
                $this -> idTelCli = $this -> conecxion -> extraer()[0];
                return true;
            }else{
                return false;
            }
        }

        function crearCliente($nombre, $apellido, $CC, $direc, $correo, $clave){/** inserta datos de cliente en la BD */
            $this -> conecxion -> abrir();
            $this -> conecxion -> ejecutar($this -> clienteDAO -> crearCliente($nombre, $apellido, $CC, $direc, $correo, $clave));
            $this -> conecxion -> cerrar();
        }
        
        function consultarID() {
            $this -> conecxion -> abrir();
            $this -> conecxion -> ejecutar($this -> clienteDAO -> consultarID());
            $this -> conecxion -> cerrar();
            $resultado = $this -> conecxion -> extraer()[0];
            return $resultado;
        }
        
        function autentica() {
            $this -> conecxion -> abrir();
            $this -> conecxion -> ejecutar($this -> clienteDAO -> autenticar());
            $this -> conecxion -> cerrar();
            if($this -> conecxion -> numFilas() == 1){
                $this -> idCliente = $this -> conecxion -> extraer()[0];
                return true;
            }else{
                return false;
            }
        }
    }