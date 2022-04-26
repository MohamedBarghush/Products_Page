<?php

class Dbh {
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function Connect () {
        $this->serverName = "localhost";
        $this->userName = "id18797158_mbproductspage";
        $this->password = "rV2U)rTWj^1!wsK#";
        $this->dbName = "id18797158_products_db";

        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

        return $conn;
    }
}