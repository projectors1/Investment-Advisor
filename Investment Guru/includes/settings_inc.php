<?php 
    require_once 'initialize_inc.php';
    require_once 'message_inc.php'; 

    if (isset($_SESSION['loggedIN'])) {         
        $accountID = $_SESSION['AccountID'];

        if(isset($_POST['btn_change'])) {
            $current_pass = mysqli_real_escape_string($conn, $_POST['txt_currentpass']);
            $new_pass = mysqli_real_escape_string($conn, $_POST['txt_newpass']);

            $query = "SELECT Password FROM useraccount WHERE AccountID = '$accountID'";
            $result = mysqli_query($conn,$query);
            $data = mysqli_fetch_assoc($result);
            $passhash = $data['Password'];

            if(password_verify($current_pass,$passhash)) {    
                $newpasshash = password_hash($new_pass,PASSWORD_DEFAULT);
                $query = "UPDATE useraccount SET Password = '$newpasshash' WHERE AccountID = '$accountID'";
                mysqli_query($conn,$query);
                $_SERVER['alertSuccess'] = "Password changed successfully";
                hideSuccess();
            }
            else {                        
                $_SERVER['alertDanger'] = 'Invalid current password';
                hideDanger();
            }
        }
    }
    else {         
		header('location: login.php');
    }
?>