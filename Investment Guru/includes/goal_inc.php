<?php
    require_once 'initialize_inc.php'; 
    require_once 'calculate_inc.php';  
    require_once 'message_inc.php'; 
    
    if (isset($_SESSION['loggedIN'])) {
        $accountID = $_SESSION['AccountID'];
        $query = "SELECT Savings FROM userfinance WHERE FinanceID = (SELECT FinanceID FROM useraccount WHERE AccountID = '$accountID')";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        $savings = (int)$data['Savings'];

        if(isset($_POST['btn_add'])) {
            $goalname = mysqli_real_escape_string($conn,$_POST['txt_goalname']);
            $goalcost = (int)mysqli_real_escape_string($conn,$_POST['txt_goalcost']);
            $goalpriority = mysqli_real_escape_string($conn,$_POST['sel_goalpriority']);

            $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'High'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $totalhigh = (int)$data['COUNT(GoalID)'];

            if($goalpriority == "High" && $totalhigh == 3) {
                $_SERVER['alertDanger'] = "Cannot set more than three goals to high priority";
                hidedanger();
            }
            else {
                $period = ceil(floatval($goalcost)/floatval($savings));
                $query = "INSERT INTO goal(Name,Cost,Priority,Period,AccountID) VALUES ('$goalname','$goalcost', '$goalpriority','$period','$accountID')";
                mysqli_query($conn,$query);
            }
        } 

        if(isset($_POST['btn_delete'])) {
            $goalID = $_POST['txt_deletegoalID'];
            $query = "DELETE FROM goal WHERE GoalID = '$goalID'";
            mysqli_query($conn,$query);
        }

        if(isset($_POST['btn_update'])) {
            $goalID = $_POST['txt_updategoalID'];
            $name = $_POST['txt_updategoalname'];
            $cost = $_POST['txt_updategoalcost'];
            $priority = $_POST['sel_updategoalpriority'];

            $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'High'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $totalhigh = (int)$data['COUNT(GoalID)'];

            $query = "SELECT Priority FROM goal WHERE GoalID = '$goalID'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);

            if($totalhigh == 3 && $data['Priority'] != "High" && $priority == "High") {
                $_SERVER['alertDanger'] = "Cannot set more than three goals to high priority";
                hidedanger();
            }
            else {
                $query = "UPDATE goal SET Name = '$name', Cost = '$cost', Priority = '$priority' WHERE GoalID = '$goalID'";
                mysqli_query($conn,$query);
            }
        }
       

        $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'High'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        $totalhigh = (int)$data['COUNT(GoalID)'];

        $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Mid'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        $totalmid = (int)$data['COUNT(GoalID)'];

        $query = "SELECT COUNT(GoalID) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Low'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        $totallow = (int)$data['COUNT(GoalID)'];

        $query = "SELECT * FROM goal WHERE AccountID = '$accountID'";
        $data = mysqli_query($conn,$query);
        while($goal = mysqli_fetch_assoc($data))  {
            $goalID = $goal['GoalID'];
            $amount = cal_amount($conn,$accountID,$goal['Priority'],$savings,$totalhigh,$totalmid,$totallow);
            $period = cal_period($conn,$accountID,$goal['GoalID'],$goal['Cost'],$goal['Priority'],$amount);

            $query = "UPDATE goal SET Amount = '$amount', Period = '$period' WHERE GoalID = '$goalID'";
            mysqli_query($conn,$query);
        }

        $query = "SELECT * FROM goal WHERE AccountID = '$accountID'";
        $result = mysqli_query($conn,$query);  
    }
    else {
		    header('location: login.php');
    }
?>