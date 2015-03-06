<?php include('../libs/admin/category.php'); ?>

<div id="function">
	<div class="title">
		Product toevoegen
	</div>

	<table>
		<tr>
			<td>Product Naam</td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td>Product Code</td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td>Product Prijs</td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td>Product Category</td>
			<td>
				<select name="" id="">
					<?php category::make(); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Product Omschrijving</td>
			<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="Toevoegen"></td>
		</tr>
	</table>
</div>