<?php
include_once('../libs/admin/product.php');

if (isset($_GET['product_id']) && !empty($_GET['product_id'])){
	//
	product::remove($_GET['product_id']);
	header('Location: ?fn=producten?action=1');
}
?>
<div id="function">
	<div class="title">
		Product verwijderen
	</div>

	<form method="GET" action="">
	<input type="hidden" name="fn" value="verwijderen">
		<table>
			<tr>
				<td>
					Selecteer product
				</td>
			</tr>
			<tr>
				<td>
					<select name="product_id" id="">
						<?php Product::make(); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Verwijderen">
				</td>
			</tr>
		</table>
	</form>
</div>