<?php 
@session_start(); 

    $index          =   "link";
    $uitgebreider   =   "link";
    $plaatsCv       =   "link";
    $cvaanmaken     =   "link";
    $cvuploaden     =   "link";

    $menuLinks=basename($_SERVER['PHP_SELF'],".php");

    switch ($menuLinks) {
        case 'index':
            $index          = "linkActive";
            break;
    }

?>
<nav class="navbar navbar-default" role="navigation">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand <?php echo $index; ?>" href="#"><img src="./img/logo.png" height="10px" width="10px">Webshopping</a>
    </div>
        
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
          
        <ul class="nav navbar-nav navbar-right">
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
        </ul>
    </div><!--/.nav-collapse -->
</div>
</nav>