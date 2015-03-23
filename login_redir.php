<?php
	include_once 'libs/auth.php';
		empty($_POST["username"]);
		empty($_POST["password"]);
		
		if (Auth::login($naam, $wachtwoord) == false){
			echo 'je moeder';
		}
		var_dump($_POST);
