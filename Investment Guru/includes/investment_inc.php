<?php 
    require_once 'initialize_inc.php';  
    
    if (isset($_SESSION['loggedIN'])) {
		
    }
    else {
        header('location: login.php');
    }
?>