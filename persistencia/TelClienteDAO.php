<?php 

class TelClienteDAO {
    private $idTelCli;	
    private $idCliente;
    private $telefono;
    
    public function __construct($pIdTelCli, $pIdCliente, $pTelefono){
        $this -> idTelCli = $pIdTelCli;
        $this -> idCliente = $pIdCliente;
        $this -> telefono = $pTelefono;
    }
    
    function crearTele() {
        echo '<br> es el dao: ' . $this->idCliente . '<br>';
        return "INSERT INTO telCliente (idCliente, telefono)
                VALUES ('" . $this -> idCliente . "','" . $this -> telefono . "')";
    }
        
    function consulta() { 
        return "SELECT telefono FROM telCliente WHERE idCliente = '" . $this -> idCliente . "'";
    }

}

