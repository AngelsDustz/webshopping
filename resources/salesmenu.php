<?php
@session_start();
include_once('../webshopping/libs/auth.php');

if (Auth::logged() && Auth::level(10)){
	//
	echo '<li><a href="../webshopping/sales/index.php">Sales panel</a></li>
		<li><a href="../webshopping/admin/index.php">Admin panel</a></li>
		';
} else {
	echo '        
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 7 - Items<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <form>
                <div class="form-group">
                    <div class="col-sm-3">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                    </div>
                    <div class="col-sm-7">
                        <label class="control-label">Aantal:</label>
                        <input type="number">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                    </div>
                    <div class="col-sm-7">
                        <label class="control-label">Aantal:</label>
                        <input type="number">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <li class="winkelmandjeLink"><a class="text-center" href="../webshopping/winkel.php">Bekijk winkelmandje</a></li>

                    </div>
                </div>
                </form>

            </ul>
        </li>
        ';
}