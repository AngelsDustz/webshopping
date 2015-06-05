<?php
include_once('database.php');
include_once('category.php');

class Products {
	//
	public function make($key){
		//
		$data = db::select('*', 'Products', 'Category = :a', ['a' => $key]);
		if ($data == false)
			return $data;
		/*
			Id -> 0 -> int
			Description -> 1 -> text
			Code -> ded
			Price -> 3 -> int
			Category -> 4 -> int
			Name -> 5 -> text
		*/
		// echo '<pre>';
		// var_dump($data);
		// echo '</pre>';


			foreach ($data as $product){
				echo "<div class='col-sm-4 col-lg-4 col-md-4'>
		                            <div class='thumbnail'>
		                                <img src='http://".$_SERVER['SERVER_NAME']."/webshopping/img/geheugen/product1.png' style='height: 100px;' alt=''>
		                                <div class='caption'>
		                                    <h4 class='pull-right'>€ ".$product[3]."</h4>
		                                    <h4><a href='http://".$_SERVER['SERVER_NAME']."/webshopping/producten/geheugen/product1.php'>".$product[5]."</a>
		                                    </h4>
		                                    <p>".$product[1]."</p>
		                                </div>
		                                <div><a class='btn btn-default' href='/webshopping/winkel.php'>Toevoegen</a></div>
		                                <div class='ratings'>
		                                    <p>
		                                        <span class='glyphicon glyphicon-star'></span>
		                                        <span class='glyphicon glyphicon-star'></span>
		                                        <span class='glyphicon glyphicon-star'></span>
		                                        <span class='glyphicon glyphicon-star'></span>
		                                        <span class='glyphicon glyphicon-star'></span>
		                                    </p>
		                                </div>
		                            </div>
		                        </div>";
			}
	}
}