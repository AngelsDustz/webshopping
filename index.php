<!DOCTYPE html>
<html lang="nl">

<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php
		if(!isset($_COOKIE['accept-cookies'])) {
		?>
			<div class="cookie-banner">
				<div class="container">
					<p>We love Cookie's, would you like to share your cookie's with us?</p>
	
					<a href="?accept-cookies" class="button">Ok, ga veder!</a>				
				</div>
			</div>
		<?php
		}
		?>
<?php include 'resources/header.php'; ?>

    <div class="container content">
        <?php include 'resources/content.php'; ?>
    </div>

    

<?php include 'resources/footer.php'; ?>

</body>

</html>