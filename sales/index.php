<?php
include_once('../libs/auth.php');

if (1/*Auth::logged() && Auth::level(5)*/){
	//
	include('main.php');
} else {
	//
	header('Location: HTTP://'.$_SERVER['HTTP_HOST'].'/webshopping/');
}