<?php
class Conexion {
    private $mysqli;
    private $resultado;

    function abrir() {
        $host = 'localhost'; // Cambia esto si tu base de datos no está en el mismo servidor
        $user = 'root'; // Cambia esto por el nombre de usuario de tu base de datos
        $password = ''; // Cambia esto por la contraseña de tu base de datos
        $database = 'registro'; // Cambia esto por el nombre de tu base de datos
        $port = 3306; // Cambia esto si tu servidor de base de datos no utiliza el puerto 3306

        try {
            $this->mysqli = new mysqli($host, $user, $password, $database, $port);

            if ($this->mysqli->connect_errno) {
                throw new Exception('Fallo al conectar a MySQL: (' . $this->mysqli->connect_errno . ') ' . $this->mysqli->connect_error);
            }

            $this->mysqli->set_charset('utf8');

            echo $this->mysqli->host_info . "\n";

            return $this->mysqli;
        } catch (Exception $e) {
            echo 'Error al conectar a la base de datos: ' . $e->getMessage();
            return null;
        }
    }

    function cerrar() {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }

    function ejecutar($sentencia) {
        try {
            if (!$this->mysqli) {
                throw new Exception('No hay conexión a la base de datos');
            }

            $this->resultado = $this->mysqli->query($sentencia);

            if (!$this->resultado) {
                throw new Exception('Error en la ejecución de la consulta: ' . $this->mysqli->error);
            }
        } catch (Exception $e) {
            echo 'Error al ejecutar la consulta: ' . $e->getMessage();
        }
    }

    function extraer() {
        try {
            if (!$this->resultado) {
                throw new Exception('No hay resultados para extraer');
            }

            return $this->resultado->fetch_row();
        } catch (Exception $e) {
            echo 'Error al extraer los resultados: ' . $e->getMessage();
            return null;
        }
    }

    function numFilas() {
        if ($this->resultado != null) {
            return $this->resultado->num_rows;
        } else {
            return 0;
        }
    }
}

