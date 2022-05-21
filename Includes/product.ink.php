<?php

class Product extends Dbh{
    // Get products from database
    protected function GetAllProducts () {
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

    // Show the products
    public function ShowAllProducts () {
        if ($this->GetAllProducts() != null) {
            $datas = $this->GetAllProducts();
            foreach ($datas as $data) {
                echo "<div class='grid-item' db_id='".$data["id"]."'>
                        <input type='checkbox' class='delete-checkbox'>";
                echo $data["SKU"]."<br>";
                echo $data["NAME"]."<br>";
                echo $data["PRICE"].".00$<br>";
                if ($data["SIZE"] != NULL) {
                    echo "Size: ".$data["SIZE"]."<br>";
                } else if ($data["WEIGHT"] != NULL) {
                    echo "Weight: ".$data["WEIGHT"]."<br>";
                } else if ($data["DIMENSION"] != NULL) {
                    echo "Dimensions: ".$data["DIMENSION"]."<br>";
                }
                echo "</div>";
            }
        } else {
            echo "<p style='text-align:center;font-weight:bold;'>There are no products yet! Add some.</p>";
        }
    }
}