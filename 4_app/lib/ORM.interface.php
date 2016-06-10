<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author carlos
 */
interface ORM {
    public function __construct($servername, $dbname, $username, $password);
    public function close();
    public function insert($sql);
    public function select($sql);
    public function delete($sql);
}
