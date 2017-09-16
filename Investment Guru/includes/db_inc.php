<?php
    global $conn;
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "investdb";

    $conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
?>