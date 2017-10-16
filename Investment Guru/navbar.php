<?php require_once('includes/navbar_inc.php'); ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php' || basename($_SERVER['PHP_SELF']) == 'goal.php' || basename($_SERVER['PHP_SELF']) == 'plan.php' || basename($_SERVER['PHP_SELF']) == 'invest.php' || basename($_SERVER['PHP_SELF']) == 'settings.php') { ?>
                <button id="btn_sidebar" type="button" class="navbar-toggle sidebar-toggle pull-left" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <img src="img/grid.svg">
                </button>  
            <?php } ?>             
            <a href="index.php">
                <div class="logo-container">                                        
                    <div class="navbar-logo"><img src="img/logo.svg"></div>
                    <div class="navbar-title">
                        <label>INVESTMENT GURU</label>
                    </div>
                </div> 
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'how_it_works.php') echo 'class="active"' ?>><a href="how_it_works.php"><i class="fa fa-tasks fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;How it works</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'about_us.php') echo 'class="active"' ?>><a href="about_us.php"><i class="fa fa-info-circle fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;About us</a></li>              
                <?php if(isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) { ?>  
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php' || basename($_SERVER['PHP_SELF']) == 'goal.php' || basename($_SERVER['PHP_SELF']) == 'plan.php' || basename($_SERVER['PHP_SELF']) == 'invest.php' || basename($_SERVER['PHP_SELF']) == 'settings.php') echo 'class="active"' ?>><a href="profile.php"><i class="fa fa-home fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Home</a></li>
                    <li><a href="login.php?logout='1'"><i class="fa fa-power-off fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li>  
                <?php } else { ?>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?>><a href="login.php"><i class="fa fa-sign-in fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Login</a></li>
                    <li class="active"><a href="signup.php"><i class="fa fa-user-circle-o fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up</a></li>                 
                <?php } ?>  
            </ul> 
        </div>
    </div>
</nav>