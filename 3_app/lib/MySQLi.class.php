<?php

class ORM_MySQLi implements ORM {

    protected $conexion;

    public function __construct($servername, $dbname, $username, $password) {

        $this->conexion = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$this->conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    
    public function close() {
        mysqli_close($this->conexion);
    }
    
    public function execute_sql($sql) {
        mysqli_query($this->conexion, $sql);
    }

}
