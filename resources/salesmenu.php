<?php
@session_start();
include_once('../webshopping/libs/auth.php');

if (Auth::logged() && Auth::level(10)){
	//
	echo '<li><a href="../webshopping/sales/index.php">Sales panel</a></li>
		<li><a href="../webshopping/admin/index.php">Admin panel</a></li>
		';
} else {
	echo '<li class="dropdown hidden-xs dezeding"><a href="../webshopping/winkel.php" id="animated-example" class="animated bounceInLeft">Winkelmandje <img src="../webshopping/img/winkelwagen.png"></a> </li>
		<li class="visible-xs dezeding"><a href="../webshopping/winkel.php" id="animated-example" class="animated bounceInLeft">Winkelmandje <img src="../webshopping/img/winkelwagen.png"></a></li>';
}