<?php

class Add extends Product {
    public function AddProduct () {
        // Properties
        $new_SKU = $_POST["sku"];
        $new_Name = $_POST["name"];
        $new_Price = $_POST["price"];
        $new_Size = $_POST["size"];
        $new_Height = $_POST["height"];
        $new_Width = $_POST["width"];
        $new_Length = $_POST["length"];
        $new_Weight = $_POST["weight"];
        $new_Type = $_POST["type"];
        if ($new_Type == "DVD")
            $attribute = "$new_Size MB";
        else if ($new_Type == "Furniture")
            $attribute = "$new_Height"."x"."$new_Width"."x"."$new_Length";
        else if ($new_Type == "Book")
            $attribute = "$new_Weight KG";

        $sql = "INSERT INTO products (SKU, NAME, PRICE, ATTRIBUTE, TYPE) VALUES ('$new_SKU', '$new_Name', '$new_Price', '$attribute', '$new_Type')";
        //$this->Connect()->query($sql);
        if ($this->Connect()->query($sql) === TRUE) {
          echo "New record created successfully";
        }
    }
}