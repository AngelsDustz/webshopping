<?php 
@session_start(); 

    $index          =   "link";
    $catogorie      =   "link";
    $contact        =   "link";
    $winkel         =   "link";
 

    $menuLinks=basename($_SERVER['PHP_SELF'],".php");

    switch ($menuLinks) {
        case 'index':
            $index              = "linkActive";
            break;
        case 'catogorie':
            $catogorie          = "linkActive";
            break;
        case 'contact':
            $contact             = "linkActive";
            break;
        case 'winkel':
            $winkel             = "linkActive";
            break;
    }

?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand <?php echo $index; ?>" href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/index.php'?> ><img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/logo.png'?> alt='Home' title='Home'></a>
    </div>
        
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <!-- Nav left -->
        <li><a style="text-align: center!important;"href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/producten/index.php'?> >Producten</a></li>
        </ul>
          
        <ul class="nav navbar-nav navbar-right">
            <li><a  style="text-align: center!important;"href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/contact.php'?> class="<?php echo $contact; ?>">Contact</a></li>

         <?php if (empty($_SESSION['Auth']['ID'])): ?>
            <li class="dropdown">
            <a style="text-align: center!important;"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <form class="form-horizontal" method="POST" action="login_redir.php">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-8 control-label">Gebruikers naam</label>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-8 control-label">Wachtwoord</label>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-7 col-sm-10">
                                <button type="submit" class="btn btn-default">Login</button>
                                </div>
                            </div>
                        </form>
                    </ul>
            </li>
        <?php endif ?>
        <?php if (!empty($_SESSION['Auth']['ID'])): ?>                    
            <li>
                <a style="text-align: center!important;"href=<?php echo '"'.'http://'.$_SERVER['SERVER_NAME'].'/webshopping/logout_redir.php"' ?>>Log uit!</a>
            </li>
        <?php endif ?>
  
            <li class="dropdown hidden-xs">
            <a style="text-align: center!important;"href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/winkel.php'?> id="animated-example" class="animated bounceInLeft">Winkelmandje <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/winkelwagen.png'?>></a>
                <ul class="dropdownWinkel dropdown-menu" role="menu">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, voluptate nihil molestias est nulla vero. Molestiae esse aliquid, modi repudiandae voluptas excepturi debitis hic mollitia earum laudantium odit suscipit, cumque.</p>
                </ul>
            </li>
            <li class="visible-xs">
               <a style="text-align: center!important;"href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/winkel.php'?> id="animated-example" class="animated bounceInLeft">Winkelmandje <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/winkelwagen.png'?>></a>
            </li> 
        </ul>
    </div><!--/.nav-collapse -->
</div>
</nav>
<div class="foutmeldingen" style="display:none;">
<!-- Hier komen foutieve login stuff -->
</div>