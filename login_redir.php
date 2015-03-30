<?php
	include_once 'libs/auth.php';

		$naam($_POST["username"]);
		$wachtwoord($_POST["password"]);

		if(empty($_POST["username"]) == true){
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
		}
		//Wel een 'check' schrijven maar er niks mee doen?
		if(empty($_POST["password"]) == true){
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
		}//Zelfde hier, het returnd true of false maar wat doe je er mee?

		//how does this work then?
		if (Auth::login($naam, $wachtwoord) == true){ //Legit check werkt.
			echo 'Works';
			echo $naam;
			echo $wachtwoord;

		}
		else
		{
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');	
		}
