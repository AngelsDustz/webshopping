<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/webshopping/libs/database.php');

/*
	Admin Library,

	Hier komen alle admin gerelateerde commands.
	productAdd,
	productRem,
	userInf,
	autoGenProductID

*/

class Admin{
	//

	/*
		Name : productAdd
		Params : int productID, string productName
		Description :
			Voegt een nieuw product toe aan de database.
	*/
	public function productAdd($productName, $productDesc, $productPrice, $productCatergory, $productID = -1){
		//
		if ($productID == -1){
			//
			$productID = Admin::autoGenProductID(); //Als er geen ID mee is gegeven genereer de sleutel automatisch door middel van autoGenProductID
		}

		db::insert('Products', 'Description, Price, Category, Name', ':a, :b, :c, :d', ['a' => $productDesc, 'b' => $productPrice, 'c' => $productCatergory, 'd' => $productName]);
		return true;
	}

	/*
		Name : autoGenProductID
		Params : none
		Description :
			Haalt de laatste ID op en returnd die dan.
	*/
	private function autoGenProductID(){
		//
		$IDs = db::select('*', 'Products');
		$IDs = end($IDs);
		$IDs = $IDs[0];
		//To-do, test als statement werkt. Als het werkt kijk hoe de id heet en tel er 1 bij op en return dat nummer
		return $IDs+1;
	}

	/*
		Name : getUserData
		Params : id
		Description :
			Haalt alle gegevens van een bepaalde gebruiker op.
	*/
	public function getUserData($id){
		//
		$data = db::select('*', 'Users', 'idUser = :idUser', ['idUser' => $id]);

		if (!empty($data) || $data != false){
			//
			return $data[0];
		} else {
			//
			return false;
		}
	}

	public function getUserLevel($UserLevel){
		//
		$UserLevel = $UserLevel['Userlevel'];
		$data = db::select('*', 'Userlevel', 'idUserlevel = :UserLevel', ['UserLevel' => $UserLevel]);

		if (!empty($data) || $data != false){
			//
			return $data[0];
		} else {
			//
			return false;
		}
	}

	public function validID($id){
		//
		if (empty($id))
			return false;

		$data = db::select('*', 'Users', 'idUser = :idUser', ['idUser' => $id]);
		if ($data == false)
			return false;

		return true;
	}

	public function getSingleData($id, $data){
		//
		if (!Admin::validID($id))
			return false;

		$data = db::select($data, 'Users', 'idUser = :idUser', ['idUser' => $id]);

		if ($data == false)
			return false;

		return $data[0][0];
	}
}