<?php
	include_once 'libs/auth.php';
	@session_start();
	Auth::logout();
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/webshopping/');	