<?php
    require_once 'initialize_inc.php';  
    
    if (isset($_SESSION['loggedIN'])) {
        $goalname = $goalcost = $goalpriority = "";
        $pdAmount = $amtPeriod = "";
    }
    else {
		header('location: login.php');
    }
?>