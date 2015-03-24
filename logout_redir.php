<?php
	include_once 'libs/auth.php';
	Auth::logout();
	unset($_SESSION['Auth']);
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');	