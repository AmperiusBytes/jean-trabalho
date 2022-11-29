<?php

namespace classes;

use \PDO;

class Database {

    private $conn;

    function __construct() {
        $this->conn = new PDO('mysql:host=localhost;dbname=db_atletica', 'root', '14220032A@');
    }

    function selecionarTime($time) {    
        $sql = 'SELECT * FROM jogadores WHERE ' . $time . '=1';

        $stmt = $this->conn->prepare($sql, []);
        $stmt->execute();
        return $stmt->fetchAll();

    }
}

?>