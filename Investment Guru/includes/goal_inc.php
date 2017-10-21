<?php
    require_once 'initialize_inc.php';   
    require_once 'message_inc.php'; 
    
    if (isset($_SESSION['loggedIN'])) {
        $accountID = $_SESSION['AccountID']; 
        $query = "SELECT * FROM goal WHERE AccountID = '$accountID'";
        $result = mysqli_query($conn,$query);

        if(isset($_POST['delete_goal']))
        {
            $goalID = $_POST['goal_id'];
            $query = "DELETE FROM goal WHERE GoalID = '$goalID'";
            mysqli_query($conn,$query);
        }

        if(isset($_POST['get_goal']))
        {
            $goalID = $_POST['goal_id'];
            $query = "SELECT * FROM goal WHERE GoalID = '$goalID'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            echo json_encode($data);
        }

        if(isset($_POST['update_goal']))
        {
            $goalID = $_POST['goal_id'];
            $name = $_POST['goal_name'];
            $cost = $_POST['goal_cost'];
            $priority = $_POST['goal_priority'];
            $type = $_POST['goal_type'];
            $period = $_POST['goal_period'];
            $amount = $_POST['goal_amount'];
            $query = "UPDATE goal SET Name = '$name', Cost = '$cost', Priority = '$priority', Savingtype = '$type', Period = '$period', Amount = '$amount' WHERE GoalID = '$goalID'";
            mysqli_query($conn,$query);
        }
    }
    else {
		    header('location: login.php');
    }
?>