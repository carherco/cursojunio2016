<?php

class Lista {
    
    protected $orm;
    
    protected $id;
    protected $nombre;

    /**
     * 
     * @param ORM $orm
     * @param string $nombre
     */
    public function __construct(ORM $orm, string $nombre) {
        $this->orm = $orm;
        
        $sql = "INSERT INTO lista (nombre) VALUES ($nombre)";
        $id = $this->orm->insert($sql);
        
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function dameListas() {
        $sql = "select * from lista order by nombre";
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
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

}
