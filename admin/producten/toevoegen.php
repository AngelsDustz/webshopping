<?php
include_once('../libs/admin/category.php');
include_once('../libs/admin/admin_lib.php');

if (isset($_GET['product_naam']) && !empty($_GET['product_naam'])){
	//
	admin::productAdd($_GET['product_naam'], $_GET['product_description'], $_GET['product_prijs']);
	header('Location: ?fn=account&action=0');
}

?>

<div id="function">
	<div class="title">
		Product toevoegen
	</div>

	<form method="GET" action="?">
		<input type="hidden" name="fn" value="toevoegen">
		<table>
			<tr>
				<td>Product Naam</td>
				<td><input type="text" name="product_naam"></td>
			</tr>
			<tr>
				<td>Product Code</td>
				<td><input type="text" name="product_code"></td>
			</tr>
			<tr>
				<td>Product Prijs</td>
				<td><input type="text" name="product_prijs"></td>
			</tr>
			<tr>
				<td>Product Category</td>
				<td>
					<select name="product_category" id="">
						<?php category::make(); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Product Omschrijving</td>
				<td><textarea name="product_description" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="Toevoegen"></td>
			</tr>
		</table>
	</form>
</div>