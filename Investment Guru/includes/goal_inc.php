<?php
    require_once 'initialize_inc.php';   
    
    if (isset($_SESSION['loggedIN'])) {
        $accountID = $_SESSION['AccountID']; 
        $query = "SELECT * FROM goal WHERE AccountID = '$accountID'";
        $result = mysqli_query($conn,$query);
    }
    else {
		    header('location: login.php');
    }
?>