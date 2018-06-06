<?php
session_start();
require 'connection.php';

function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

$id = validate_input($_POST['regID']);
$email = validate_input($_POST['regEmail']);
$password = validate_input($_POST['regPassword']);
$pass_hash = md5($password);

$sql_insert = "INSERT INTO CUSTOMERS (NAME, PASSWORD, EMAIL) VALUES ('".$id."', '".$pass_hash."', '".$email."')";
mysqli_query($conn, $sql_insert);

echo "Register successfully, now get you back to the login page...";
$_SESSION['loginUserName']= $id;
$_SESSION['loginUserPassword']= $pass_hash;
echo '<script type="text/javascript">window.location.href="login.php";</script>';

die();
?>