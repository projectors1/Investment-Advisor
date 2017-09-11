<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand" id="brand"><i class="fa fa-line-chart fa-inverse fa-fw" aria-hidden="true"></i>&nbsp;&nbsp; INVESTMENT GURU</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-left">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'how_it_works.php') echo 'class="active"' ?>><a href="how_it_works.php">How it works</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'investment.php') echo 'class="active"' ?>><a href="#">Investment</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'about_us.php') echo 'class="active"' ?>><a href="about_us.php">About us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?>><a href="login.php" id="login-nav"><i class="fa fa-sign-in fa-2x fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Login</a></li>
                <li><a href="signup.php" type="button" class="btn btn-primary btn-sign" id="btn-signup"><span><i class="fa fa-user-circle-o fa-2x fa-icons" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<!--
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-logo">
                <button id="btn_sidebar" type="button" class="navbar-toggle sidebar-toggle pull-left" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <img src="img/grid.svg">
                </button>

                <ul id="sm-view" class="navbar-brand navbar-settings pull-right settings-sm">
                    <li>
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-inverse fa-2x" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                            <li><a><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand" id="brand"><i class="fa fa-line-chart fa-inverse fa-fw" aria-hidden="true"></i>&nbsp;&nbsp; INVESTMENT GURU</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="how_it_works.php" id="how-h">How it works</a></li>
                <li><a href="about_us.php" id="about-h">About us</a></li>
            </ul>

            <ul id="lg-view" class="navbar-brand navbar-settings pull-right settings-lg">
                <li>
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v fa-inverse fa-2x" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                        <li><a><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

-->