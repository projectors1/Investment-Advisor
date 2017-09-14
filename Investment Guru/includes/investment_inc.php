<?php
    session_start();
    require_once 'db_inc.php';

    if (!isset($_SESSION['loggedIN'])) {
		header('location: login.php');
    }
    else if(isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {
        $accountID = $_SESSION['AccountID'];

        $query = "SELECT FirstName FROM userprofile WHERE ProfileID = (SELECT ProfileID FROM useraccount WHERE AccountID = '$accountID')";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);

        $firstname = $data['FirstName'];
    }
?>