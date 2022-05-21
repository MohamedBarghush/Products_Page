<?php

class Modify extends Product {
    // Delete a product
    public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->Connect()->query($query);
        if ($result == true) {
            echo '<script language="javascript">alert("Entry with id '.$id.' deleted from the table '.$table.' succesfully!");</script>';
            // $_POST = array();
            return true;
        }
	}
	
	// Check if any field is empty
	public function check_empty($data, $fields)
	{
		$msg = null;
		foreach ($fields as $value) {
			if (empty($data[$value])) {
				$msg .= "$value field empty <br />";
			}
		} 
		return $msg;
	}

    // Add a product
    public function AddProduct () {
        // Properties
        $new_SKU = $_POST["sku"];
        $new_Name = $_POST["name"];
        $new_Price = $_POST["price"];
        $new_Size = $_POST["size"];
        $new_Weight = $_POST["weight"];
        $new_Dimension = $_POST["dimension"];
        
        $msg = $this->check_empty($_POST, ['sku', 'name', 'price']);

        if($msg != null) {
		                echo $msg."<br>";		
	    } else {
            if ($this->GetAllProducts() != null) {
                $datas = $this->GetAllProducts();
                foreach($datas as $product){
                    if ($product["SKU"] == $new_SKU) {
                        echo "A product exists with the same SKU<br>";
                        return false;
                    }
                }
            }
            $sql = "INSERT INTO products (SKU, NAME, PRICE, SIZE, WEIGHT, DIMENSION) VALUES ('$new_SKU', '$new_Name', '$new_Price', '$new_Size', '$new_Weight', '$new_Dimension')";
            if ($this->Connect()->query($sql) === TRUE) {
                echo "New record created successfully";
            }
            echo "<script>window.location.href = 'https://mbproductspage.000webhostapp.com/';</script>";
	    }

    }
}