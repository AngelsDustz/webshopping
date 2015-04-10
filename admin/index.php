<?php
@session_start();
include_once('../libs/auth.php');

if (Auth::logged() && Auth::level(10)){
	//
	include('main.php');
} else {
	//
	header('Location: HTTP://'.$_SERVER['HTTP_HOST'].'/webshopping/');
}