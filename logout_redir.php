<?php
	include_once 'libs/auth.php';
	Auth::logout();
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');	