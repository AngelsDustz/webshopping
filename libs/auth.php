<?php
/*
	authentication.php

	Hier komen alle inlog functies en dergelijke.
*/

include 'database.php'; // Dit is nodig om de database aan te roepen en commands op de database uit te voeren.

class Auth {
	//
	/*
		Name: attempt
		Params: username, password
		Description:
		Private function die daadwerkelijk de database check doet.
	*/
	public function attempt($username, $password){
		//
		$data = db::select('*', 'Users', "password = $password");
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
		//To-do moet testen met database!!
	}
}