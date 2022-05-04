<?php

class DeleteItem extends Product {
    public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$this->Connect()->query($query);
	}
}