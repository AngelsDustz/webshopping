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
						<form method='post' action='cartupdate.php'>
		                            <div class='thumbnail'>
		                                <img src='http://".$_SERVER['SERVER_NAME']."/webshopping/img/geheugen/product1.png' style='height: 100px;' alt=''>
		                                <div class='caption'>
		                                    <h4 class='pull-right'>€ ".$product[3]."</h4>
		                                    <h4><a href='http://".$_SERVER['SERVER_NAME']."/webshopping/producten/geheugen/product1.php'>".$product[5]."</a>
		                                    </h4>
		                                    <p>".$product[1]."</p>
		                                </div>
		                                <div><button class='btn btn-default add_to_cart'>Toevoegen</button></div>
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
		                            <input type='hidden' name='return_url' />
		                            <input type='hidden' name='type' value='add' />
		                            <input type='hidden' name='return_url' />
		                    </form>
		                </div>";

			}
	}
}
//  <div class="products">
// <?php
// //current URL of the Page. cart_update.php redirects back to this URL
// $current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
//     $results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
//     if ($results) { 
//         //output results from database
//         while($obj = $results->fetch_object())
//         {
            
//             echo '<div class="product">'; 
//             echo '<form method="post" action="cart_update.php">';
//             echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
//             echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
//             echo '<div class="product-desc">'.$obj->product_desc.'</div>';
//             echo '<div class="product-info">Price '.$currency.$obj->price.' <button class="add_to_cart">Add To Cart</button></div>';
//             echo '</div>';
//             echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
//             echo '<input type="hidden" name="type" value="add" />';
//             echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
//             echo '</form>';
//             echo '</div>';
//         }
    
// }
