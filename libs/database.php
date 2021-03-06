<?php
/*
	Database,
	hier komen alle database basis functies in.
*/

class db {
	//
	/*
		Name: connect
		Params: none
		Description:
			Maakt een connectie met de database en returnd dit.
			Deze function staat op private omdat ALLEEN de db class deze function mag aanroepen.
	*/
	private function connect(){
		//
		include($_SERVER['DOCUMENT_ROOT'].'/webshopping/config/database.php'); //Laad de configuratie van een extern bestand in $dbConfig
		$type 	= $dbConfig['type'];
		$host 	= $dbConfig['host'];
		$dbname = $dbConfig['dbname'];
		$user 	= $dbConfig['user'];
		$pass 	= $dbConfig['pass'];
		unset($dbConfig);

		$string = $type.':host='.$host.';dbname='.$dbname;
		try {
			//
			$db = new PDO($string, $user, $pass);
		} catch (Exception $e){
			//
			throw new Exception("$e", 500);
			
		}
		return $db;
	}

	/*
		Name: select
		Params: select, from, where, values
		Description:
			Een standaart select functie maar dan makkelijker gemaakt om te gebruiken.
			Voorbeeld : SELECT * FROM Users WHERE id = 2;
			Zou dan worden db::select('*', 'Users', 'id = :id', ['id' => 2])
			De eerste is wat je wilt selecteren.
			De tweede waar je het vandaan wilt halen
			En de derde parameter is de where functie. Deze en value zijn niet verplicht.
			Als je gebruik maakt van where moet je de waarde in een beveiligde manier over brengen.
			Door middel van values (array)
			Je geeft een beveiligde waarde aan met :name en in de array roep je hem aan als name.
	*/
	public function select($select, $from, $where = '', $values = []){
		//
		$db = db::connect();
		$toExecute = "SELECT $select FROM $from";
		if ($where != ""){
			//
			$toExecute .= " WHERE $where";
		}

		$statement = $db->prepare($toExecute);
		$statement->execute($values);


		return $statement->fetchAll();
	}

	/*
		Name: query
		Params: query, values
		Description:
			Een geadvanceerdere query command. Dit kun je gebruiken als je een specifieke query wilt runnen.
			bijvoorbeeld INSERT INTO Users (Name) VALUES (:name), ['name' => 'bobby']
			Gelieve deze functie zo min mogelijk te gebruiken!
	*/
	public function query($query, $values = []){
		//
		$db = db::connect();
		$statement = $db->prepare($query);
		$statement->execute($values);

		return $statement->fetchAll();
	}

	/*
		Name: insert
		Params: 
		Description:
			Simpele functie om iets toe te voegen.
			Werkt als volgt
			Eerste para is de tabel, dan waar je dingen wilt toevoegen
			De :waarde gevolgt door de beveilidge waarde.
			insert('Users', 'Username,Password', ':usrname,:passwrd', ['usrname'=>'admin', 'passwrd'=>'admin'])
	*/
	public function insert($table, $what, $values, $sec_value){
		//
		$db = db::connect();
		$toExecute = "INSERT INTO $table ($what) VALUES ($values)";

		$statement = $db->prepare($toExecute);
		$statement->execute($sec_value);
	}

	public function drop($table, $where){
		//
		$db = db::connect();
		$db->exec("DELETE FROM $table WHERE $where");
	}
}