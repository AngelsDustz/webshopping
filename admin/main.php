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
					<a href='?fn=pr-toevoegen'>Toevoegen</a>
				</div>

				<div class="hover-button" style="display: none;">
					<a href='?fn=pr-verwijderen'>Verwijderen</a>
				</div>
			</div>

			<div class="button" onclick="showHover(this);">
				Gebruikers
				<div class="hover-button" style="display: none;">
					<a href='?fn=geb-informatie'>Informatie</a>
				</div>
			</div>
		</div>

		<?php
			if (!empty($_GET)){
				//
				switch ($_GET['fn']) {
					case 'pr-toevoegen':
							include('producten/toevoegen.php');
						break;

					case 'pr-verwijderen':
							include('producten/verwijderen.php');
						break;

					case 'geb-informatie':
							include('gebruikers/informatie.php');
						break;
				}
			}
		?>
	</body>
</html>