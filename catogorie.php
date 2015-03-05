<!DOCTYPE html>
<html lang="en">

<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

    <div class="container content">
        <div class="container-fluid">
    		<div class="row">
	            <div class="col-md-3">
	            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </div>

	            <div class="col-md-9">
	            	<div class="row">
                    	<div class="col-md-3">
	                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/resources/producten/geheugen.php' ?> class="thumbnail">
	                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
	                            <div class="flipper">
	                                <div class="front">
	                                    Geheugen
	                                    <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/ram.png' ?>>
	                                </div>
	                                <div class="back">
	                                    We hebben veel Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	                                </div>
	                            </div>
                        	</div>
                        	</a>
                    	</div>
                    </div>
	            </div>

            </div>
        </div>
    </div>
    

<?php include 'resources/footer.php'; ?>

</body>

</html>