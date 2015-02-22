<?php
/*
	Database,
	hier komen alle database basis functies in.
*/

class db {
	//
	private function dbConnect(){
		//
		include_once '../config/database.php'; //Laad de configuratie van een extern bestand in $dbConfig
		$type 	= $dbConfig['type'];
		$host 	= $dbConfig['host'];
		$dbname = $dbConfig['dbname'];
		$user 	= $dbConfig['user'];
		$pass 	= $dbConfig['pass'];

		unset($dbConfig);
		$string = $type.':host='.$host.';dbname='.$dbname;
		return new PDO($string, $user, $pass);
	}

	public function dbSelect($select, $from, $where = ''){
		//
		$db = db::dbConnect();
		$toExecute = "SELECT $select FROM $from";
		if ($where != ""){
			//
			$toExecute .= " WHERE $where";
		}

		$statement = $db->prepare($toExecute);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function dbQuery($query){
		//
		$db = db::dbConnect();
		$statement = $db->prepare($query);
		$statement->execute();

		return $statement->fetchAll();
	}
}