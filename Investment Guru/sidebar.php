<?php
    session_start();
?>

<div class="sidebar-section">
    <div class="line"></div>
    <div class="sidebar-user">
        <img src="img/profile.jpg">
        <div><label><?= $_SESSION['firstname'] ?></label></div>
    </div>
    <div class="line"></div>
    <ul class="nav nav-list">
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php') echo 'class="active"' ?>>
            <a href="profile.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i><p>Profile</p></a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'class="active"' ?>>
            <a href="dashboard.php"><i class="fa fa-pie-chart fa-fw" aria-hidden="true"></i><p>Dashboard</p></a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'calculator.php') echo 'class="active"' ?>>
            <a href="calculator.php"><i class="fa fa-calculator fa-fw" aria-hidden="true"></i><p>Calculator</p></a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'investment.php') echo 'class="active"' ?>>
            <a href="investment.php"><i class="fa fa-line-chart fa-fw" aria-hidden="true"></i><p>Investment</p></a>
        </li>
    </ul>
</div>