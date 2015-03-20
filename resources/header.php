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
        <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/catogorie.php'?> >Producten</a></li>
        </ul>
          
        <ul class="nav navbar-nav navbar-right">
            <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/contact.php'?> class="<?php echo $contact; ?>">Contact</a></li>


            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-8 control-label">Email</label>
                        <div class="col-sm-10 col-sm-offset-1">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-8 control-label">Password</label>
                        <div class="col-sm-10 col-sm-offset-1">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
                        <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>
            </ul>
            </li>
            <li class="<?php echo $winkel; ?>"><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/winkel.php'?> id="animated-example" class="animated bounceInLeft">Winkelmandje <img src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/webshopping/img/winkelwagen.png'?>></a></li>
        </ul>
    </div><!--/.nav-collapse -->
</div>
</nav>
<div class="foutmeldingen" style="display:none;">
<!-- Hier komen foutieve login stuff -->
</div>