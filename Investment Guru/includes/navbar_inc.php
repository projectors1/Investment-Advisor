<?php         
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
        unset($_SESSION['Email']);
        session_destroy();	
        header('location: login.php');	
    } 
?>