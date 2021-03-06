<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-2">
            <?php include 'resources/sidemenu.php'; ?>
        </div>
        <div class="col-xs-12 col-md-10">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                <div class="row carousel-holder">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/900x300.gif'?> alt="">
                                    <div class="carousel-caption">
                                        <h3>Welkom bij webshopping!</h3>
                                        <p>Webshopping is opgericht door Berwout, Johan en klaasjan</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/900x300.gif'?> alt="">
                                    <div class="carousel-caption">
                                        <h3>Kijk hier voor onze producten</h3>
                                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/catogorie.php'?>>Klik hier</a>
                                    </div>
                                </div>
                                <div class="item ">
                                    <img class="slide-image" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/900x300.gif'?> alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/geheugen.php' ?> class="thumbnail index">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                            <div class="flipper">
                                <div class="front">
                                    <h8>Geheugen</h8>
                                    <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/ram.png' ?>>
                                </div>
                                <div class="back">
                                    <p>Onze geheugen banken zijn verkrijgbaar vanaf 14,95 euro. We hebben banken van 2GB en 4GB,
                                        hier zijn ook combinaties in te maken.
                                    </p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/behuizing.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/fans.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/controllers.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
                                    <div class="front">
                                        <h8>Controllers</h8>
                                        <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/controllers.png' ?>>
                                    </div>
                                    <div class="back">
                                        <p>Controllers voor op uw moederbord, geluidskaarten of WiFikaarten.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/videokaarten.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/voeding.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/moederbord.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/hardeschrijf.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-6">
                        <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/ssd.php' ?> class="thumbnail index">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');" >
                                <div class="flipper">
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

            <div class="col-md-4">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="col-md-12">
                    <?php  include 'resources/review.php'; ?>
                </div>
        </div>
        </div>

    </div>
</div>