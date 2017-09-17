<?php
    require_once 'initialize_inc.php';
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    $_SESSION['message'] = "";
    
    
    if (!isset($_SESSION['loggedIN'])) {
		header('location: login.php');
    }
    else {       
        $firstname = $lastname = $email = $dob = $city = $country = "";
        $income = $expenses = $savings = "";
        $current_pass = $new_pass = $new_confirmpass = "";
        $accountID = $_SESSION['AccountID']; 

        $query = "SELECT * FROM userprofile WHERE ProfileID = (SELECT ProfileID FROM useraccount WHERE AccountID = $accountID)";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $firstname = $data['FirstName'];
            $lastname = $data['LastName'];
            $email = $_SESSION['Email'];
            $dob = $data['DOB'];
            $city = $data['City'];
            $country = $data['Country']; 
        }

        $query = "SELECT * FROM userfinance WHERE FinanceID = (SELECT FinanceID FROM useraccount WHERE AccountID = $accountID)";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $income = $data['Income'];
            $expenses = $data['Expenses'];
            $savings = $data['Savings']; 
        }
    }

    
?>