<?php

class Lista {
    
    protected $id;
    protected $nombre;

    /**
     * 
     * @param ORM $orm
     * @param string $nombre
     */
    public function __construct() {
        
    }
    
    public function save() {
        $gestor = new GestorListas();
        $gestor->guardar($this);
    }
    
    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function getId() {
        return $this->id;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getElementos() {
        return $this->nombre;
    }


}
