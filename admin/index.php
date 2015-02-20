<?php

if (/*User::hasAuth('admin')*/1){
	//
	include('main.php');
} else {
	//
	header('Location: HTTP://'.$_SERVER['HTTP_HOST'].'/webshopping/');
}