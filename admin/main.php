<html lang="nl">
	<?php include('../resources/head.php'); ?>
	<link rel="stylesheet" type="text/css" href=<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/webshopping/css/admin/main.css'?> >
	<script type="text/javascript" src=<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/webshopping/libs/js/admin.js'?>></script>

	<body>
		<div id="admin-panel">
			<b>Admin paneel</b>

			<div class="button" onclick="showHover(this);">
				Producten
				<div class="hover-button" style="display: none;">
					Toevoegen
				</div>

				<div class="hover-button" style="display: none;">
					Verwijderen
				</div>
			</div>

			<div class="button" onclick="showHover(this);">
				Gebruikers
				<div class="hover-button" style="display: none;">
					Informatie
				</div>
			</div>
		</div>
	</body>
</html>