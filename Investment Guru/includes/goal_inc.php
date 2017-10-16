<?php
    require_once 'initialize_inc.php';   
    require_once 'message_inc.php'; 
    
    if (isset($_SESSION['loggedIN'])) {
        $accountID = $_SESSION['AccountID']; 
        $query = "SELECT * FROM goal WHERE AccountID = '$accountID'";
        $result = mysqli_query($conn,$query);

        if(isset($_POST['delete_row']))
        {
            $goalID = $_POST['row_id'];
            $query = "DELETE FROM goal where GoalID='$goalID'";
            mysqli_query($conn,$query);
        }
    }
    else {
		    header('location: login.php');
    }
?>