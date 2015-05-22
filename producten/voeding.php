<!DOCTYPE html>
<?php include('../libs/products.php'); ?>
<html lang="en">

<!-- De scripts -->
<?php include '../resources/head.php'; ?>

<body>
<?php include '../resources/header.php'; ?>

    <div class="container content">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        		    <ul class="breadcrumb">
					    <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/index.php'?>>Home</a> <span class="divider">/</span></li>
					    <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/index.php'?>>Catogorien</a> <span class="divider">/</span></li>
					    <li class="active">Voeding</li>
				    </ul>
        		</div>
        	</div>
    		<div class="row">
	            <div class="col-md-12">
		            <div class="col-md-3">
		            	<?php include '../resources/sidemenu.php'; ?>
		            </div>
		            <div class="col-md-9">
                        <?php Product::make(9); ?>
		            </div>	
	            </div>
            </div>
        </div>
    </div>

    

<?php include '../resources/footer.php'; ?>

</body>

</html>