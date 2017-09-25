<?php
    require_once 'initialize_inc.php';
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    $_SESSION['message'] = "";   
    
    if (isset($_SESSION['loggedIN'])) {
        $firstname = $lastname = $email = $dob = $city = $country = "";
        $income = $expenses = $savings = "";
        $accountID = $_SESSION['AccountID']; 

        $query = "SELECT * FROM userprofile WHERE ProfileID = (SELECT ProfileID FROM useraccount WHERE AccountID = '$accountID')";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $profileID = $data['ProfileID'];
            $firstname = $data['FirstName'];
            $lastname = $data['LastName'];
            $email = $_SESSION['Email'];
            $dob = $data['DOB'];
            $city = $data['City'];
            $country = $data['Country']; 
        }

        $query = "SELECT * FROM userfinance WHERE FinanceID = (SELECT FinanceID FROM useraccount WHERE AccountID = '$accountID')";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);                     
            $financeID = $data['FinanceID'];
            $income = $data['Income'];
            $expenses = $data['Expenses'];
            $savings = $data['Savings']; 
        }

        if(isset($_POST['btn_personal'])) { 
            $firstname = mysqli_real_escape_string($conn,$_POST['txt_firstname']);
            $lastname = mysqli_real_escape_string($conn,$_POST['txt_lastname']);
            $dob = mysqli_real_escape_string($conn,$_POST['txt_dob']);
            $city = mysqli_real_escape_string($conn,$_POST['txt_city']);
            $country = mysqli_real_escape_string($conn,$_POST['txt_country']);

            $query = "UPDATE userprofile SET FirstName = '$firstname', LastName = '$lastname', DOB = '$dob', City = '$city', Country = '$country' WHERE ProfileID = '$profileID' ";
            mysqli_query($conn,$query);
        }

        if(isset($_POST['btn_finance'])) {
            $income = mysqli_real_escape_string($conn,$_POST['txt_income']);
            $expenses = mysqli_real_escape_string($conn,$_POST['txt_expenses']);
            $savings = mysqli_real_escape_string($conn,$_POST['txt_savings']);

            if(!isset($financeID)) {
                $query = "INSERT INTO userfinance (Income,Expenses,Savings) VALUES ('$income','$expenses','$savings')";
                mysqli_query($conn,$query);
                $financeID = mysqli_insert_id($conn);

                $query = "UPDATE useraccount SET FinanceID = '$financeID' WHERE AccountID = '$accountID' ";
                mysqli_query($conn,$query);
            }
            else {  
                $query = "UPDATE userfinance SET Income = '$income', Expenses = '$expenses', Savings = '$savings' WHERE FinanceID = '$financeID' ";
                mysqli_query($conn,$query);
            }
        }
    }
    else {  
		header('location: login.php');
    }

?>