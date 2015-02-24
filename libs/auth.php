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
	private function attempt($username, $password){
		//
		$data = db::select('*', 'Users', "Name = :username AND Pass = :password",
						['username' => $username, 'password' => $password]);
		if (empty($data)){
			//
			return false; //Een foutief naam of wachtwoord.
		}
		
		//Als we hier zijn weten we dat we data terug hebben gekregen.
		return $data[0]; //We geven de eerste resultaat terug. Er zou nooit meer dan 1 antwoord uit kunnen komen.
	}

	public function login($username, $password){
		//
		$data = Auth::attempt($username, $password);
		if ($data == false){
			//
			echo 'Het is niet gelukt om U in te loggen!<br>Controlleer U naam en wachtwoord en probeer opnieuw<br>';
		} else {
			//
			echo "Hallo $username, het is gelukt U in te loggen!<br>";
		}
	}
}