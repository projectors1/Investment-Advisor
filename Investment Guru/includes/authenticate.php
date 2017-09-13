<?php
    session_start();
    $firstname = "";
    $email = "";

    include 'includes/db.php';

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
            $_SESSION['firstname'] = $firstname;
            header('location: profile.php');
        } 
    }

?>