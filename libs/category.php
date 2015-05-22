<?php
/*
	Hier komt de script voor het ophalen van de Categoriën.
*/

class Category {
	//
	/*
		Name: Get
		Parameters : int limit, int id
		Returns: Data
		Description :
		Haalt de data op van de database met een $limit en/of gefiltert op $id.
	*/
	public function get($limit = 0, $id = -1){
		//
		if ($limit != 0){
			//
			$getLimit = 'LIMIT '.$limit;
		} else {
			//
			$getLimit = '';
		}

		if ($id != -1){
			//
			$data = db::select('*', 'Category', 'idCategory = :idc', ['idc' => $id]);
		} else {
			//
			$data = db::select('*', 'Category');
		}

		return $data;
	}
}