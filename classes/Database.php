<?php

namespace classes;

use \PDO;

class Database {

    private $conn;

    function __construct() {
        $this->conn = new PDO('mysql:host=localhost;dbname=db_atletica', 'root', '14220032A@');
    }

    function selecionarJogadores($time) {    
        $sql = 'SELECT * FROM jogadores WHERE ' . $time . '=1';

        $stmt = $this->conn->prepare($sql, []);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    function selecionarEventos() {
        $sql = 'SELECT * FROM eventos ORDER BY data';

        $stmt = $this->conn->prepare($sql, []);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    function selecionarEvento($id) {
        $sql = 'SELECT * FROM eventos where id_evento=?';

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
}

?>