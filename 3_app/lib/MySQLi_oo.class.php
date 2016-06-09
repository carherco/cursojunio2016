<?php

include_once 'lib/ORM.interface.php';

class ORM_MySQLi_OO implements ORM {

    protected $conexion;

    public function __construct($servername, $dbname, $username, $password) {

        $this->conexion = new mysqli($servername, $username, $password, $dbname);
        
        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        } 
    }
    
    public function close() {
        $this->conexion->close();
    }
    
    public function execute_sql($sql) {
        
        $this->conexion->query($sql);
        
    }
    
    /**
     * Realiza un insert en la BD
     * 
     * @param string $sql
     * @return int Id del registro insertado
     */
    public function insert($sql) {
        
        if($this->conexion->query($sql) === TRUE) {
            $last_id = $this->conexion->insert_id;
            return $last_id;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            return -1;
        }    
        
    }
    
    /**
     * Realiza una select en la BD
     * 
     * @param string $sql
     * @return array datos obtenidos
     */
    public function select($sql) {
        
        $result = $this->conexion->query($sql);

        if($result->num_rows > 0) {
            
            $datos = array();
            while($row = $result->fetch_assoc()) {
                array_push($datos,$row);
            } 
            return $datos;

        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            return -1;
        }    
        
    }
    
    public function delete($sql) {
        if($this->conexion->query($sql) === TRUE) {
            return 1;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conexion->error;
            return -1;
        }    
    }

}

