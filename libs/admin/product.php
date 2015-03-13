<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/webshopping/libs/database.php');

class Product {
	//
	private function getData(){
		//
		$data = db::Select('*', 'Products');

		if (empty($data)){
			$data = false;
		}

		return $data;
	}

	public function make(){
		//
		$data = Product::getData();
		if ($data == false){
			//
			return false;
		}

		foreach ($data as $product){
			//
			echo "<option value=\"$product[0]\">$product[5]</options>";
		}
	}

	public function remove($id){
		//
		db::drop('Products', 'idProducts ='.$id);
	}
}