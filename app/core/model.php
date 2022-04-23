<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class model{
  public $db;
 function db(){
    $options = [
        //required
        'username' => 'root',
        'database' => 'gallery',
        //optional
        'password' => '',
        'type' => 'mysql',
        'charset' => 'utf8',
        'host' => 'localhost',
        'port' => '3306'
    ];
    return isset( $this->db ) ? $this->db : $this->db = new Database($options);
}
}
?>