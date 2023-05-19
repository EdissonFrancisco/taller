<?php 
    class ClienteDAO {
        private $idCliente;
        private $nombre;
        private $apellido;
        private $nit_cc;
        private $direccion;
        private $correo;
        private $clave;
        private $estado;

        public function __construct($pIdCliente, $pNombre, $pApellido, $pNit_cc, $pDireccion, $pCorreo, $pClave, $pEstado) {
            $this -> idCliente = $pIdCliente;
            $this -> nombre = $pNombre;
            $this -> apellido = $pApellido;
            $this -> nit_cc = $pNit_cc;
            $this -> direccion = $pDireccion;
            $this -> correo = $pCorreo;
            $this -> clave = $pClave;
            $this -> estado = $pEstado;
        }

        function validar($pCorreo) {
            return "SELECT correo 
                    FROM cliente
                    WHERE correo = '" . $pCorreo . "'";
        }

        function crearCliente($nombre, $apellido, $CC, $direc, $correo, $clave) {
            return "INSERT INTO cliente (nombre, apellido, nit_cc, direccion, correo, clave)
                    VALUES ('" . $nombre ."',
                            '" . $apellido ."',
                            '" . $CC ."',
                            '" . $direc ."',
                            '" . $correo ."',
                            '" . $clave ."')";
        }
        
        function consultarID() {
            return "SELECT MAX(idCliente) AS id FROM cliente";
        }
        
        function autenticar() {
            return "SELECT idCliente 
                    FROM cliente
                    WHERE correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
        }
    }