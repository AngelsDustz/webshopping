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
		$data = db::select('*', 'Users', "password = :password AND Name = :username",
						['username' => $username, 'password' => $password]);
		if (empty($data)){
			//
			return false; //Een foutief naam of wachtwoord.
		}
		
		//Als we hier zijn weten we dat we data terug hebben gekregen.
	}
}