<?php
    session_start();
    $firstname = "";
    $email = "";
    $_SERVER['message'] = "";

    require_once 'includes/db_inc.php';

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
            $result = mysqli_query($conn,$query2);
            $account_id = mysqli_insert_id($conn);  

            $_SESSION['AccountID'] = $account_id;    
            $_SESSION['loggedIN'] = true;
            header('location: profile.php');
        } 
    }

    if(isset($_POST['btn_login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['txt_email']);
        $password = mysqli_real_escape_string($conn, $_POST['txt_pass']);

        $query = "SELECT AccountID,Email,Password FROM useraccount WHERE Email = '$email'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $passhash = $row['Password'];

            if(password_verify($password,$passhash)) {
                $_SESSION['AccountID'] = $row['AccountID'];
                $_SESSION['loggedIN'] = true;
                header('location: profile.php');
            }
            else {
                $_SERVER['message'] = "Invalid password";
            }
        }
        else {
            $_SERVER['message'] = "Account with this email does not exist";
        }
    }
?>