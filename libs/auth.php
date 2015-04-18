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

	/*
		Name: login
		Params: username, password
		Description:
			Controlleert of de naam en wachtwoord juist zijn en loggen je dan in.
	*/
	public function login($username, $password){
		//
		$data = Auth::attempt($username, $password);
		if ($data == false){
			//
			$_SESSION['error']['Auth'] = 'Het is niet gelukt om in te loggen!<br>Controleer Uw naam en wachtwoord!<br>';
			return false;
		} else {
			//
			$_SESSION['Auth']['ID'] 		= $data['idUser'];
			$_SESSION['Auth']['Username'] 	= $data['Name'];
			$_SESSION['Auth']['Userlevel'] 	= 0;
			$data2 = db::select('Userlevel', 'Userlevel', 'idUserlevel = :idul', ['idul' => $data['Userlevel']]);
			if ($data2 != false)
				$_SESSION['Auth']['Userlevel'] = $data2[0];
			$_SESSION['Auth']['Email'] 		= $data['E-Mail'];
			$_SESSION['Auth']['PaymentID'] 	= $data['Paymentid'];
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
		}
	}

	/*
		Name: logout
		Params: none
		Description:
			Logd de gebruiker uit.
	*/
	public function logout(){
		//
		if (Auth::logged()){ //Met Auth::logged() kijken we of de gebruiker is ingelogd.
			//
			unset($_SESSION['Auth']);
		}
	}

	/*
		Name: logged
		Params: none
		Description:
			Kijkt of de gebruiker is ingelogd.
	*/
	public function logged(){
		//
		if (!empty($_SESSION['Auth'])){
			//
			return true;
		} else {
			//
			return false;
		}
	}

	/*
		Name: level
		Params: int level
		Description:
			Controleert of de gebruiker het juiste $level of hoger heeft.
	*/
	public function level($level){
		//
		if (!empty($_SESSION['Auth']['Userlevel'])){
			$userlevel 	= $_SESSION['Auth']['Userlevel'];
		} else {
			$userlevel 	= -1;
		}

		if ($userlevel >= $level){
			//
			return true;
		}

		return false;
	}
}