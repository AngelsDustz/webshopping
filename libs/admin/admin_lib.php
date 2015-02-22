<?php

include '../libs/database.php';

/*
	Admin Library,

	Hier komen alle admin gerelateerde commands.
	productAdd,
	productRem,
	userInf,
	autoGenProductID

*/

class adminLib{
	//

	/*
		Name : productAdd
		Params : int productID, string productName
		Description :
			Voegt een nieuw product toe aan de database.
	*/
	public function productAdd($productID = -1, $productName, $productDesc, $productPrice){
		//
		if ($productID == -1){
			//
			$productID = autoGenProductID(); //Als er geen ID mee is gegeven genereer de sleutel automatisch door middel van autoGenProductID
		}
	}

	/*
		Name : autoGenProductID
		Params : none
		Description :
			Haalt de laatste ID op en returnd die dan.
	*/
	private function autoGenProductID(){
		//
		$IDs = db::dbQuery('SELECT idProducts FROM Products ORDER BY DESC LIMIT 1');
		//To-do, test als statement werkt. Als het werkt kijk hoe de id heet en tel er 1 bij op en return dat nummer
	}
}