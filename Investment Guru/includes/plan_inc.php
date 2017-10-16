<?php
    require_once 'initialize_inc.php';  
    require_once 'message_inc.php'; 
    
    if (isset($_SESSION['loggedIN'])) {
        $goalname = $goalcost = $goalpriority = $goalmode = "";
        $savingType = $amount = $period = "";

        if(isset($_POST['btn_add'])) {
            $goalname = mysqli_real_escape_string($conn,$_POST['result_goalname']);
            $goalcost = (int)mysqli_real_escape_string($conn,$_POST['result_goalcost']);
            $goalpriority = mysqli_real_escape_string($conn,$_POST['result_goalpriority']);
            $goalmode = mysqli_real_escape_string($conn,$_POST['chk_mode']);
            $amount = (int)mysqli_real_escape_string($conn,$_POST['result_amount']);
            $period = (int)mysqli_real_escape_string($conn,$_POST['result_period']);
            $savingType = mysqli_real_escape_string($conn,$_POST['result_savingType']);
            $accountID = $_SESSION['AccountID'];

            $query = "INSERT INTO goal(Name,Cost,Priority,Mode,Savingtype,Period,Amount,AccountID) VALUES ('$goalname','$goalcost','$goalpriority','$goalmode','$savingType','$period','$amount','$accountID')";
            mysqli_query($conn,$query);
        } 
    }
    else {
		header('location: login.php');
    }
?>