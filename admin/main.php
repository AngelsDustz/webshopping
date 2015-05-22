<?php
include_once('../libs/admin/product.php');
include_once('../libs/admin/admin_lib.php');

for ($i = 0; $i < 8; $i++)
	$button[$i] = 'button';

if ($_GET['fn'] == 'account'){
	$button[0] = 'button active';

	if ($_GET['action'] == '0')
		$button[2] = 'button active';

	if ($_GET['action'] == '1')
		$button[3] = 'button active';

	if ($_GET['action'] == '2')
		$button[4] = 'button active';
}

if ($_GET['fn'] == 'producten'){
	$button[1] = 'button active';

	if ($_GET['action'] == '0')
		$button[5] = 'button active';

	if ($_GET['action'] == '1')
		$button[6] = 'button active';

	if ($_GET['action'] == '2')
		$button[7] = 'button active';
}

if ($_GET['fn'] == 'verwijderen'){
	//
	if (isset($_GET['product_id']))
		Product::remove($_GET['product_id']);

	header('Location: ?fn=producten&action=1');
}

if ($_GET['fn'] == 'toevoegen'){
	//
	Admin::productAdd($_GET['product_naam'], $_GET['product_description'], $_GET['product_prijs'], $_GET['product_category']);
	header('Location: ?fn=producten&action=0');
}

?>
<html lang="nl">

	<link rel="stylesheet" type="text/css" href=<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/webshopping/css/admin/main.css'?> >
	<body>
		<div id="admin-panel">
			<h1>Admin paneel</h1>
			<hr>
			
			<ul style="list-style-type: none;">
				<li>
					<?php printf('<div onclick="window.location.assign(\'?fn=account\');" class="%s">', $button[0]); ?>
						Account
					</div>
				</li>

				<li>|</li>

				<li>
					<?php printf('<div onclick="window.location.assign(\'?fn=producten\');" class="%s">', $button[1]); ?>
						Producten
					</div>
				</li>
			</ul>
		</div>

		<div id="admin-content">
			<?php if ($_GET['fn'] == 'account'): ?>

				<h2>Admin paneel - Account</h2>
				<p>Hier kunt u makkelijk de accounts aanpassen.</p>
				
				<br>
				
				<div <?php printf('class="%s"', $button[2]); ?> onclick="window.location.assign('?fn=account&action=0');">
					Informatie
				</div>

				<div <?php printf('class="%s"', $button[3]); ?> onclick="window.location.assign('?fn=account&action=1');">
					Rechten
				</div>

				<div <?php printf('class="%s"', $button[4]); ?> onclick="window.location.assign('?fn=account&action=2');">
					Verwijderen
				</div>

			<?php elseif ($_GET['fn'] == 'producten'): ?>

				<h2>Admin paneel - Producten</h2>
				<p>Hier kunt u makkelijk de producten beheren.</p>

				<br>

				<div <?php printf('class="%s"', $button[5]); ?> onclick="window.location.assign('?fn=producten&action=0');">
					Toevoegen
				</div>

				<div <?php printf('class="%s"', $button[6]); ?> onclick="window.location.assign('?fn=producten&action=1');">
					Verwijderen
				</div>

			<?php else: ?>

				<h2>Admin paneel</h2>
				<p>Hier kunt u makkelijk accounts en producten beheren.</p>

			<?php endif; ?>
			<br><br>

			<?php
				if ($button[2] == 'button active')
					include('gebruikers/informatie.php');

				if ($button[3] == 'button active')
					echo 'Comming soon!';

				if ($button[4] == 'button active')
					echo 'Comming soon!';

				if ($button[5] == 'button active')
					include('producten/toevoegen.php');

				if ($button[6] == 'button active')
					include('producten/verwijderen.php');
			?>
		</div>
	</body>
</html>