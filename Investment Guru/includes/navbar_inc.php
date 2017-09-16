<?php       
    if(isset($_COOKIE["InvestCookie"]) && !isset($_SESSION['loggedIN'])) {
        getInvestCookie($conn);
    }

	if (isset($_GET['logout'])) {
        if(isset($_COOKIE["InvestCookie"])) {
            $accountID = $_SESSION['AccountID'];
            $query = "UPDATE useraccount SET CookieKey=NULL WHERE AccountID='$accountID'";
            mysqli_query($conn,$query);           
            setcookie('InvestCookie','',time() - 3600, "/", NULL);
        }       
        unset($_SESSION['FirstName']);
        unset($_SESSION['AccountID']);
        unset($_SESSION['loggedIN']);
        session_destroy();	
        header('location: login.php');	
    } 

    function getInvestCookie($conn) {
        $cookieContent = $_COOKIE["InvestCookie"];
        $cookieArray = unserialize($cookieContent);
        $cookiekey = $cookieArray['cookiedata'];
        $email = $cookieArray['email'];
        $query = "SELECT AccountID,ProfileID FROM useraccount WHERE Email='$email' AND CookieKey='$cookiekey'";
        $result = mysqli_query($conn,$query);

        if($result) {
            $data = mysqli_fetch_assoc($result);
            $accountID = $data['AccountID'];
            $profileID = $data['ProfileID'];
            
            $query = "SELECT FirstName FROM userprofile WHERE ProfileID ='$profileID'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
                    
            $_SESSION['FirstName'] = $data['FirstName'];
            $_SESSION['AccountID'] = $accountID;
            $_SESSION['loggedIN'] = true;
        }
    }
?>