<?php
	if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['AccountID']);
        $_SESSION['loggedIN'] = false;
		header("location: login.php");
	}
    
    if(isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {
        $accountID = $_SESSION['AccountID'];

        $query = "SELECT FirstName FROM userprofile WHERE ProfileID = (SELECT ProfileID FROM useraccount WHERE AccountID = '$accountID')";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);

        $firstname = $data['FirstName'];
    }
?>