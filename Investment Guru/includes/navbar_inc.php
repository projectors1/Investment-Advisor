<?php
    if(isset($_COOKIE["InvestCookie"])) {
        $cookieContent = $_COOKIE['InvestCookie'];
        $cookieArray = unserialize($cookieContent);
        $cookiekey = $cookieArray['cookiedata'];
        $email = $cookieArray['email'];
        $query = "SELECT AccountID FROM useraccount WHERE Email=$email AND CookieKey=$cookiekey";
        $result = mysqli_query($conn,$query);

        if($result == 1) {
            $data = mysqli_fetch_assoc($result);
            $_SESSION['AccountID'] = $data['AccountID'];
            $_SESSION['loggedIN'] = true;
        }
    }

	if (isset($_GET['logout'])) {
        unset($_SESSION['AccountID']);
        session_destroy();
        $_SESSION['loggedIN'] = false;
        setcookie('InvestCookie','',time() - 3600, "/", NULL);
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