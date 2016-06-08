<?php

include_once 'config/config.php';
include_once 'lib/MySQLi_oo.class.php';
//include_once 'lib/MySQLi.class.php';
include_once 'lib/PDO.class.php';

class GestorListas {
    
    /** @var ORM */
    protected $orm;
    
    protected $id;
    protected $nombre;

    /**
     * 
     * @param ORM $orm
     * @param string $nombre
     */
    public function __construct() {
        $orm_class = ORM_CLASS;
        $this->orm = new $orm_class(SERVERNAME, DBNAME, USERNAME, PASSWORD);
    }

    public function dameListas() {
        $sql = "select * from lista order by nombre";
        $datos = $this->orm->select($sql);

        return $datos;
    }

    public function buscarListasPorNombre(string $nombre) {
        $sql = "select * from lista where nombre like '%" . $nombre . "%'";
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    /**
     * 
     * @param int $id
     * @return type
     */
    public function dameLista(int $id) {
        $sql = "select * from lista where id=" . $id;
        $datos = $this->orm->select($sql);
        
        
        
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        $row = mysql_fetch_assoc($result);
        return $row;
    }
    
    public function close() {
        $this->orm->close();
    }

}
