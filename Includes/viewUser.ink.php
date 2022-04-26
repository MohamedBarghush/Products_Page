<?php

class ViewUser extends User{
    public function ShowAllUsers () {
        $datas = $this->GetAllUsers();
        foreach ($datas as $data) {
            echo "<div class='grid-item' db_id='".$data["id"]."'>
                    <input type='checkbox' class='delete-checkbox'>";
            echo $data["SKU"]."<br>";
            echo $data["NAME"]."<br>";
            echo $data["PRICE"].".00$<br>";
            if ($data["TYPE"] == "DVD") {
                echo "Size: ".$data["SIZE"]." MB<br>";
            } else if ($data["TYPE"] == "Book") {
                echo "Weight: ".$data["WEIGHT"]." KG<br>";
            } else if ($data["TYPE"] == "Furniture") {
                echo "Dimension: ".$data["HEIGHT"]."x".$data["WIDTH"]."x".$data["LENGTH"]."<br>";
            }
            echo "</div>";
        }
    }
}