<?php
	include_once 'libs/auth.php';
		empty($_POST["username"]);//Wel een 'check' schrijven maar er niks mee doen?
		empty($_POST["password"]);//Zelfde hier, het returnd true of false maar wat doe je er mee?
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/'); //Hier mee worden we direct terug gestuurt nog
		//voordat er ook maar iets gebeurt

		if (Auth::login($naam, $wachtwoord) == false){ //Legit check werkt.
			echo 'je moeder';//Waarom :V
		}
		else
		{
			Auth::login($naam, $wachtwoord); //Waarom roepen we login nog een keer aan? Als het goed gaat doet het alles al.
			//Dit is een beetje erg overbodig. En ik twijfel of dit wel uitgevoerd wordt.
		}
