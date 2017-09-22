<?php 
    require_once 'initialize_inc.php';
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    $_SESSION['message'] = "";

    $current_pass = "";
    $new_pass = "";
    $new_confirmpass = "";
?>