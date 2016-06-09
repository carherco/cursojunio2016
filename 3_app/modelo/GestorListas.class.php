<?php

include_once 'config/config.php';
include_once 'lib/MySQLi_oo.class.php';
//include_once 'lib/MySQLi.class.php';
include_once 'lib/PDO.class.php';
include_once 'modelo/Lista.class.php';

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
    
    public function guardar($lista) {
        if(!isset($lista->id)) {
            $sql = "INSERT INTO lista (nombre) VALUES (".$lista->nombre.")";
            $id = $this->orm->insert($sql);
            $lista->id = $id;
        } else {
            $sql = "UPDATE lista set nombre='".$lista->nombre."'";
        }
    }

    public function dameListas() {
        $sql = "select * from lista order by nombre";
        $datos = $this->orm->select($sql);

        return $datos;
    }

    public function buscarListasPorNombre($nombre) {
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
     * @return Lista
     */
    public function dameLista($id) {
        $sql = "select * from lista where id=" . $id;
        $datos = $this->orm->select($sql);
   
        if(isset($datos) && count($datos) === 1) {
            $lista = new Lista();
            $lista->setId($datos[0]['id']);
            $lista->setNombre($datos[0]['nombre']);
            return $lista;
        } else {
            return null;
        }

    }
    
    /**
     * 
     * @param int $id
     * @return type
     */
    public function dameElementosLista($id) {
        $sql = "select * from elemento where id_lista=" . $id;
        $datos = $this->orm->select($sql);

        return $datos;
    }
    
    public function anyadirElementoLista($idlista, $nombre) {
        $sql = "INSERT INTO elemento (id_lista, nombre) VALUES ($idlista,'$nombre')";
        $this->orm->insert($sql);
    }
    
    public function borrarElementoLista($idelemento) {
        $sql = "DELETE FROM elemento WHERE id=".$idelemento;
        $this->orm->delete($sql);
    }
    
    public function tacharElementoLista($id) {
        $sql = "UPDATE elemento set realizado=1 where id=" . $id;
        $this->orm->execute_sql($sql);
    }
    
    public function destacharElementoLista($id) {
        $sql = "UPDATE elemento set realizado=0 where id=" . $id;
        $this->orm->execute_sql($sql);
    }
    
    
    public function close() {
        $this->orm->close();
    }

}
