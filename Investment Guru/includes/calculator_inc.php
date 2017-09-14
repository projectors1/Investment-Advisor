<?php
    session_start();
    require_once 'db_inc.php';
    
    if (!isset($_SESSION['loggedIN'])) {
		header('location: login.php');
    }
?>