<?php
    require_once 'initialize_inc.php';    
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    $firstname = "";
    $email = "";
    if(!isset($_SESSION['message'])) {      
        $_SERVER['message'] = '';
    }

    if (isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {
		  header('location: profile.php');
    }
    else {
        if(isset($_POST['btn_signup'])) {
            $firstname = mysqli_real_escape_string($conn, $_POST['txt_firstname']);
            $email = mysqli_real_escape_string($conn, $_POST['txt_email']);
            $password = mysqli_real_escape_string($conn, $_POST['txt_pass']);
            $confirmpass = mysqli_real_escape_string($conn, $_POST['txt_confirmpass']);
            $passhash = password_hash($password,PASSWORD_DEFAULT);

            $query1 = "INSERT INTO userprofile (FirstName) VALUES ('$firstname')";
            if (mysqli_query($conn,$query1)) {
                $profile_id = mysqli_insert_id($conn);        
                $query2 = "INSERT INTO useraccount (Email,Password,ProfileID) VALUES ('$email','$passhash','$profile_id')";
                mysqli_query($conn,$query2);
                $_SERVER['message'] = "Registration Successful";
                header('location: login.php');
            } 
        }

        if(isset($_POST['btn_login'])) {
            $email = mysqli_real_escape_string($conn, $_POST['txt_email']);
            $password = mysqli_real_escape_string($conn, $_POST['txt_pass']);

            $query = "SELECT AccountID,Password,ProfileID FROM useraccount WHERE Email = '$email'";
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) == 0) {
                $_SERVER['message'] = 'User account does not exist'; 
            }
            else {
                $row = mysqli_fetch_assoc($result);
                $accountID = $row['AccountID'];
                $passhash = $row['Password'];
                $profileID = $row['ProfileID'];

                if(!password_verify($password,$passhash)) {             
                    $_SERVER['message'] = 'Invalid password';
                }
                else {
                    if($_POST['chk_remember'])
                    {
                        setInvestCookie($conn,$email,$passhash,$accountID);
                    }
                    $query = "SELECT FirstName FROM userprofile WHERE ProfileID ='$profileID'";
                    $result = mysqli_query($conn,$query);
                    $data = mysqli_fetch_assoc($result);
                            
                    $_SESSION['FirstName'] = $data['FirstName'];
                    $_SESSION['AccountID'] = $accountID;
                    $_SESSION['Email'] = $email;
                    $_SESSION['loggedIN'] = true;
                    header('location: profile.php');
                }
            }
        }
    }       

    function setInvestCookie($conn,$email,$passhash,$accountID) {
        $emailhash = password_hash($email,PASSWORD_DEFAULT);
        $cookie = $emailhash . $passhash;
        $cookiekey = password_hash($cookie,PASSWORD_DEFAULT);
        $query = "UPDATE useraccount SET CookieKey='$cookiekey' WHERE AccountID='$accountID'";
        if(mysqli_query($conn,$query)) {
            $cookieArray = array('cookiedata'=>$cookiekey,'email'=>$email);
            $cookieContent = serialize($cookieArray);
            setcookie("InvestCookie",$cookieContent,time() + 60*60*24*30, "/", NULL);
        }
    }
?>