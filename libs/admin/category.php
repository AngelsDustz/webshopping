<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/webshopping/libs/database.php');

class category{
	//
	private function getData(){
		//
		$count = 0;
		$data = db::select('*', 'Category');
		$return = [];
		foreach ($data as $key) {
			//
			$return[$count] = $key;
			$count++;
		}unset($key);

		return $return;
	}

	public function make($limit = 0){
		//
		$data = category::getData();
		if ($limit == 0){
			//
			foreach ($data as $key) {
				//
				echo "<option value=\"$key[0]\">$key[1]</option>";
			}
		} else {
			//
			for ($i=0; $i < $limit; $i++) { 
				//
				echo "<option value=\"$data[$i][0]\">$data[$i][1]</option>";
			}
		}
	}
}