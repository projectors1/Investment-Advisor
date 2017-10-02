<?php
    require_once 'initialize_inc.php';  
    
    if (isset($_SESSION['loggedIN'])) {
        $goalname = $goalcost = $goalpriority = $goalmode = "";
        $savingType = $savings = $period = "";

        if(isset($_POST['btn_add'])) {
            $goalname = mysqli_real_escape_string($conn,$_POST['txt_goalname']);
            $goalcost = (int)mysqli_real_escape_string($conn,$_POST['txt_goalcost']);
            $goalpriority = mysqli_real_escape_string($conn,$_POST['sel_goalpriority']);
            $goalmode = mysqli_real_escape_string($conn,$_POST['chk_mode']);
            $savings = (int)mysqli_real_escape_string($conn,$_POST['txt_savings']);
            $period = (int)mysqli_real_escape_string($conn,$_POST['txt_period']);
            $savingType = mysqli_real_escape_string($conn,$_POST['sel_savingType']);

        } 
    }
    else {
		header('location: login.php');
    }
?>