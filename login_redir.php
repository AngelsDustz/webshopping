<?php
	include_once 'libs/auth.php';
		empty($_POST["username"]);
		empty($_POST["password"]);
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');

		if (Auth::login($naam, $wachtwoord) == false){
			echo 'je moeder';
		}
		else
		{
		var_dump($_POST);
		}