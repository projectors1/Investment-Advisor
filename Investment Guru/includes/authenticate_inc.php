<?php
    require_once 'initialize_inc.php'; 
    require 'message_inc.php';      
    $firstname = "";
    $email = "";   

    if (isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {
		  header('location: profile.php');
    }
    else {
        if(isset($_POST['btn_signup'])) {
            $firstname = mysqli_real_escape_string($conn, $_POST['txt_firstname']);
            $email = mysqli_real_escape_string($conn, $_POST['txt_email']);
            $password = mysqli_real_escape_string($conn, $_POST['txt_pass']);
            $passhash = password_hash($password,PASSWORD_DEFAULT);

            $query = "INSERT INTO userprofile (FirstName) VALUES ('$firstname')";
            if (mysqli_query($conn,$query)) {
                $profile_id = mysqli_insert_id($conn);        
                $query = "INSERT INTO useraccount (Email,Password,ProfileID) VALUES ('$email','$passhash','$profile_id')";
                mysqli_query($conn,$query);
                header('location: login.php');
            } 
        }

        if(isset($_POST['btn_login'])) {
            $email = mysqli_real_escape_string($conn, $_POST['txt_email']);
            $password = mysqli_real_escape_string($conn, $_POST['txt_pass']);

            $query = "SELECT AccountID,Password,ProfileID FROM useraccount WHERE Email = '$email'";
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) == 0) {
                $_SERVER['alertDanger'] = 'User account does not exist'; 
                hideDanger();
            }
            else {
                $data = mysqli_fetch_assoc($result);
                $accountID = $data['AccountID'];
                $passhash = $data['Password'];
                $profileID = $data['ProfileID'];

                if(password_verify($password,$passhash)) {                       
                    if($_POST['chk_remember']) {
                        setInvestCookie($conn,$email,$passhash,$accountID);
                    }
                    $query = "SELECT FirstName FROM userprofile WHERE ProfileID = '$profileID'";
                    $result = mysqli_query($conn,$query);
                    $data = mysqli_fetch_assoc($result);
                            
                    $_SESSION['FirstName'] = $data['FirstName'];
                    $_SESSION['AccountID'] = $accountID;
                    $_SESSION['Email'] = $email;
                    $_SESSION['loggedIN'] = true;
                    header('location: profile.php');         
                }
                else {                   
                    $_SERVER['alertDanger'] = 'Invalid password';
                    hideDanger();
                }
            }
        }
    }       

    function setInvestCookie($conn,$email,$passhash,$accountID) {
        $emailhash = password_hash($email,PASSWORD_DEFAULT);
        $cookie = $emailhash . $passhash;
        $cookiekey = password_hash($cookie,PASSWORD_DEFAULT);
        $query = "UPDATE useraccount SET CookieKey = '$cookiekey' WHERE AccountID = '$accountID'";
        if(mysqli_query($conn,$query)) {
            $cookieArray = array('cookiedata'=>$cookiekey,'email'=>$email);
            $cookieContent = serialize($cookieArray);
            setcookie("InvestCookie",$cookieContent,time() + 60*60*24*30, "/", NULL);
        }
    }
?>