<?php

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
	public function productAdd($productID = -1, $productName){
		//
		if ($productID == -1){
			//
			$prodcutID = autoGenProductID(); //Als er geen ID mee is gegeven genereer de sleutel automatisch door middel van autoGenProductID
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
	}
}