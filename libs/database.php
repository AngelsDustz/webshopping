<?php
/*
	Database,
	hier komen alle database basis functies in.
*/

class db {
	//
	private function connect(){
		//
		include_once './config/database.php'; //Laad de configuratie van een extern bestand in $dbConfig
		$type 	= $dbConfig['type'];
		$host 	= $dbConfig['host'];
		$dbname = $dbConfig['dbname'];
		$user 	= $dbConfig['user'];
		$pass 	= $dbConfig['pass'];
		unset($dbConfig);

		$string = $type.':host='.$host.';dbname='.$dbname;
		$db = new PDO($string, $user, $pass);
		return $db;
	}

	public function select($select, $from, $where = ''){
		//
		$db = db::connect();
		$toExecute = "SELECT $select FROM $from";
		if ($where != ""){
			//
			$toExecute .= " WHERE $where";
		}
		$statement = $db->prepare($toExecute);
		$statement->execute();


		return $statement->fetchAll();
	}

	public function query($query){
		//
		$db = db::connect();
		echo 'db : '.var_dump($db).'<br>';
		$statement = $db->prepare($query);
		echo 'statement : '.var_dump($statement).'<br>';
		$statement->execute();
		echo 'statement : '.var_dump($statement).'<br>';

		echo 'fetch : '.var_dump($statement->fetchAll()).'<br>';
		return $statement->fetchAll();
	}
}