<?php

echo error_reporting(E_ALL | E_STRICT);
if(isset($_POST['btnsubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirmpass = $_POST['confirmpass'];
    var_dump($_POST);
}
var_dump($_POST);
echo file_get_contents('php://input');

?>