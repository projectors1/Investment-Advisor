<?php
    require_once 'initialize_inc.php';  
    require_once 'message_inc.php'; 
    
    if (isset($_SESSION['loggedIN'])) {

        if(isset($_POST['calculate_goal'])) {         
            $accountID = $_SESSION['AccountID'];
            $priority = $_POST['goal_priority'];
            $cost = $_POST['goal_cost'];

            $query = "SELECT Savings FROM userfinance WHERE FinanceID = (SELECT FinanceID FROM useraccount WHERE AccountID = '$accountID')";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $savings = (int)$data['Savings'];

            $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'High'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $totalhigh = (int)$data['Count(GoalID)'];

            $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Mid'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $totalmid = (int)$data['Count(GoalID)'];

            $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Low'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $totallow = (int)$data['Count(GoalID)'];

            $totalgoal = $totalhigh + $totalmid + $totallow;

            if($priority == 'High') {
                if($totalgoal == $totalhigh)
                    $amount = $savings;
                else
                    $amount = (70/100) * $savings;
            }
            else if($priority == 'Mid') {  
                
            }
            else {

            }   
        }

        if(isset($_POST['btn_add'])) {
            $goalname = mysqli_real_escape_string($conn,$_POST['result_goalname']);
            $goalcost = (int)mysqli_real_escape_string($conn,$_POST['result_goalcost']);
            $goalpriority = mysqli_real_escape_string($conn,$_POST['result_goalpriority']);
            $amount = (int)mysqli_real_escape_string($conn,$_POST['result_amount']);
            $period = (int)mysqli_real_escape_string($conn,$_POST['result_period']);
            $savingType = mysqli_real_escape_string($conn,$_POST['result_savingType']);
            $accountID = $_SESSION['AccountID'];

            $query = "INSERT INTO goal(Name,Cost,Priority,Savingtype,Period,Amount,AccountID) VALUES ('$goalname','$goalcost', '$goalpriority','$savingType','$period','$amount','$accountID')";
            mysqli_query($conn,$query);
        } 
    }
    else {
		header('location: login.php');
    }
?>