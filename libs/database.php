<?php
/*
	Database,
	hier komen alle database basis functies in.

	dbConnect,
	dbQuery
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

	public function dbQuery(){
		//
		$datab = db::dbConnect();
	}
}