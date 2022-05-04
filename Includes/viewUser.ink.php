<?php

class ViewProduct extends Product{
    public function ShowAllProducts () {
        if ($this->GetAllProducts() != null) {
            $datas = $this->GetAllProducts();
            foreach ($datas as $data) {
                echo "<div class='grid-item' db_id='".$data["id"]."'>
                        <input type='checkbox' class='delete-checkbox'>";
                echo $data["SKU"]."<br>";
                echo $data["NAME"]."<br>";
                echo $data["PRICE"].".00$<br>";
                if ($data["TYPE"] == "DVD") {
                    echo "Size: ".$data["ATTRIBUTE"]."<br>";
                } else if ($data["TYPE"] == "Book") {
                    echo "Weight: ".$data["ATTRIBUTE"]."<br>";
                } else if ($data["TYPE"] == "Furniture") {
                    echo "Dimensions: ".$data["ATTRIBUTE"]."<br>";
                }
                echo "</div>";
            }
        }
    }
}
