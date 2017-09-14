<?php
    session_start();
    require_once 'includes/db_inc.php';

    if(isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {

    }
    else if (!isset($_SESSION['loggedIN'])) {
		header('location: login.php');
    }
?>