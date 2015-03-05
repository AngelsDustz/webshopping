<?php include_once('../libs/database.php'); include_once('../libs/admin/admin_lib.php'); ?>
<div id="function">
		<div class="title">
			Informatie
		</div>

	
		<form method="GET">
			<input type="number" name="userid" value=<?php echo (isset($_GET['userid']))? $_GET['userid'] : '' ?> > <input type="submit" value="go">
			<input type="hidden" name="fn" value="geb-informatie">
		</form>

		<table>
			<tr>
				<td>
					Gebruikers ID
				</td>

				<td>
					: <?php echo (isset($_GET['userid']) && !empty($_GET['userid']))? $_GET['userid'] : 'USER_ID' ?>
				</td>
			</tr>

			<tr>
				<td>
					Gebruikers Naam
				</td>

				<td>
					: <?php echo (isset($_GET['userid']) && Admin::validID($_GET['userid']))? Admin::getSingleData($_GET['userid'], 'Name') : 'USER_NAME' ?>
				</td>
			</tr>

			<tr>
				<td>
					Gebruikers level
				</td>

				<td>
					: <?php echo (isset($_GET['userid']) && Admin::validID($_GET['userid']))? Admin::getSingleData($_GET['userid'], 'Userlevel') : 'USER_LEVEL' ?>
				</td>
			</tr>

			<tr>
				<td>
					Gebruikers email
				</td>

				<td>
					: <?php echo (isset($_GET['userid']) && Admin::validID($_GET['userid']))? Admin::getSingleData($_GET['userid'], 'Email') : 'USER_EMAIL' ?>
				</td>
			</tr>
		</table>
</div>