<!DOCTYPE html>
<html lang="en">

<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

    <div class="container content">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        		    <ul class="breadcrumb">
					     <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/index.php'?>>Home</a> <span class="divider">/</span></li>
					    <li class="active">Catogorie</li>
				    </ul>
        		</div>
        	</div>

    		<div class="row">
	            <div class="col-md-3">
	            	<?php include 'resources/sidemenu.php'; ?>
	            </div>

	            <div class="col-md-9">
                	<div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/geheugen.php' ?> class="thumbnail">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                            <div class="flipper index">
                                <div class="front">
                                    <h8>Geheugen</h8>
                                    <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/ram.png' ?>>
                                </div>
                                <div class="back">
                                    <p>Onze geheugen banken zijn verkrijgbaar vanaf 14,95 euro. We hebben banken van 2GB en 4GB,
                                    hier zijn ook combinaties in te maken.</p>
                                </div>
                            </div>
                    	</div>
                    	</a>
                	</div>
                	<div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/behuizing.php' ?> class="thumbnail">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                            <div class="flipper index">
                                <div class="front">
                                    <h8>Behuizing</h8>
                                    <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/behuizing.png' ?>>
                                </div>
                                <div class="back">
                                	<p>We hebben veel verschilende soorten behuizingen variërend van kleine kasten tot grote towers.</p>
                                </div>
                            </div>
                    	</div>
                    	</a>
                	</div>
                	<div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/fans.php' ?> class="thumbnail">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                            <div class="flipper index">
                                <div class="front">
                                    <h8>Fans</h8>
                                    <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/fans.png' ?>>
                                </div>
                                <div class="back">
                                    <p>Fans om uw desktop koel te houden, variërend van waterkoeling tot 16" fans.</p>
                                </div>
                            </div>
                    	</div>
                    	</a>
                	</div>

                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/controllers.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>Controllers</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/controllers.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Controllers voor op uw moederbord geluidkaarten of ...</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/videokaarten.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>Videokaarten</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/videokaart.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Hier staat het assortiment van alle videokaarten die wij aanbieden.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/voeding.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>Voeding</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/voeding.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Voeding nodig voor alle componenten die stroom nodig hebben in uw desktop.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/moederbord.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>Moederbord</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/moederbord.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Het hart van uw computer hierop zet u al uw kaarten.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/hardeschrijf.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>Hardeschrijven</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/hardeschrijf.png' ?>>
                                    </div>
                                    <div class="back">
                                    <p>De opslag van uw PC hierop komen al uw programma's te staan.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/ssd.php' ?> class="thumbnail">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper index">
                                    <div class="front">
                                        <h8>SSD</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/ssd.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Zogeheten solid state drives dit is een opslag schijf maar vooral bedoeld voor programma's die u vaak gebruikt.
                                        Hier worden ook meestal besturingsystemen gezet.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

	            </div>


            </div>
        </div>
    </div>
    

<?php include 'resources/footer.php'; ?>

</body>

</html>