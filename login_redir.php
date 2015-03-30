<?php
	include_once 'libs/auth.php';
	@session_start(); //Nog niet belangerijk om te weten.

	$naam = $_POST["username"]; //$variable = waarde
	$wachtwoord = $_POST["password"]; //Zelfde hier

	if(empty($_POST["username"]) == true){ //Netjes!
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
	}
	
	if(empty($_POST["password"]) == true){
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
	}

	if (Auth::login($naam, $wachtwoord) == false){ //In de functie staat gedefiniert dat als het goed gaat
		//hij automatisch de rest doet. Beetje overbodig eigenlijk maar leek mij makkelijker.
		//Dus je hoeft alleen te kijken of het fout ging en zo ja terug sturen.
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');
	}
