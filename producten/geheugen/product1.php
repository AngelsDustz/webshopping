<!DOCTYPE html>
<html lang="en">

<!-- De scripts -->
<?php include '../../resources/head.php'; ?>

<body>
<?php include '../../resources/header.php'; ?>

    <div class="container content">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        		    <ul class="breadcrumb">
					    <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/index.php'?>>Home</a> <span class="divider">/</span></li>
					    <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/index.php'?>>Catogorien</a> <span class="divider">/</span></li>
					    <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/geheugen.php'?>>Geheugen</a> <span class="divider">/</span></li>
					    <li class="active">G.skill 4GB DDR</li>
				    </ul>
        		</div>
        	</div>
    		<div class="row">
    		<div class="col-md-12">
		            <div class="col-md-3">
		              <?php include '../../resources/sidemenu.php'; ?>
		            </div>
    			<div class="col-md-5">
    				<h1>G.Skill 4 GB DDR3-1600</h1>
    			</div>
    			<div class="col-md-2 col-md-offset-2">
    				<img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/geheugen/product1.png' ?> style=" height: 180px;" alt="">
    			</div>		
	            <div class="col-md-3">
	            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </div>
	            <div class="col-md-9">

	            </div>	
            </div>
            </div>
        </div>
    </div>

    

<?php include '../../resources/footer.php'; ?>

</body>

</html>