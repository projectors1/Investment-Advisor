<?php
    require_once 'initialize_inc.php';
    if(!isset($_SESSION)) { 
        session_start(); 
    } 

    $_SESSION['message'] = "";
    $firstname = "";
    $lastname = "";
    $email = "";
    $dob = "";
    $city = "";
    $country = "";
    
    if (!isset($_SESSION['loggedIN'])) {
		header('location: login.php');
    }
    else {

    }
?>