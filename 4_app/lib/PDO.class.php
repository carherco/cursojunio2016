<?php

class ORM_PDO implements ORM{

    protected $conexion;

    public function __construct($servername, $dbname, $username, $password) {

        try {
            
            $this->conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $e) {
           
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    
    public function close() {
        
        $this->conexion = null;
        
    }
    
    /**
     * Realiza un insert en la BD
     * 
     * @param string $sql
     * @return int Id del registro insertado
     */
    public function insert($sql) {
        
        try {
            $this->conexion->exec($sql);
            $last_id = $this->conexion->lastInsertId();
            return $last_id;
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }    
        
    }
    
    /**
     * Realiza una select en la BD
     * 
     * @param string $sql
     * @return array datos obtenidos
     */
    public function select($sql) {
        
        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $datos = $stmt->fetchAll();
            
            return $datos;

        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }    
        
    }
    
    public function delete($sql) {
        try {
            $this->conexion->exec($sql);
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }    
    }

}
