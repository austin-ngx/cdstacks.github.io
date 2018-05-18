<?php
SESSION_START();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['signUpUserName']) || empty($_POST['signUpUserPassword']) || empty($_POST['signUpEmail'])) {
$error = "All field MUST be filled";
}
else
{
// Define $username and $password
$username=$_POST['signUpUserName'];
$password=$_POST['signUpUserPassword'];
$email=$_POST['signUpEmail'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "access", "onetwothreefour5");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$email = stripslashes($email);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$password = md5($password);
$email = mysql_real_escape_string($email);

// Selecting Database
$db = mysql_select_db("shop", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO USERINFO ('USER_NAME', 'USER_PASSWORD', 'USER_EMAIL') VALUES ('$username','$password','$email')", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: user.php"); // Redirecting To Other Page
} else {
$error = "ERROR";
}
mysql_close($connection); // Closing Connection
}
}
?>