<?php 

session_start();

if (empty($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}

 ?>