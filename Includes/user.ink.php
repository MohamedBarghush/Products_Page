<?php

class User extends Dbh{
    protected function GetAllUsers () {
        $sql = "SELECT * FROM products";
        $result = $this->Connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}