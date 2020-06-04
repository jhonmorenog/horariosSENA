<?php

class Conexion {

    private $conn;

    public function __construct() {
        $this->conn = new mysqli();
        $this->conn->connect("localhost", "root", "", "brandocuper", "3306");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function consulta($sql) {
        return  $this->conn->query($sql);
    }
    function close() {
        $this->conn->close();
    }

}

?>