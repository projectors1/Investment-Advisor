<?php  
    require_once 'db_inc.php';     
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    
    if(!isset($_SERVER['alertInfo'])) {       
        $_SERVER['alertInfo'] = "";
        $_SERVER['alertSuccess'] = "";
        $_SERVER['alertDanger'] = "";
    }
    
    if(isset($_COOKIE["InvestCookie"]) && !isset($_SESSION['loggedIN'])) {
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
            $_SESSION['Email'] = $email;
            $_SESSION['loggedIN'] = true;
        }
    }
?>