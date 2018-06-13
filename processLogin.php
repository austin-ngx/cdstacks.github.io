<?php
SESSION_START();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['loginUserName']) || empty($_POST['loginUserPassword'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
		include 'connection.php';

        $username=$_POST['loginUserName'];
        $password=$_POST['loginUserPassword'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $pass = md5($password);

        // SQL query to fetch information of registerd users and finds user match.
		$sql = "select * from CUSTOMERS where PASSWORD='$pass' AND NAME='$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['loginUserName']=$username; // Initializing Session
            $_SESSION['isSignedIn']=true; 
            header("location: account.php"); // Redirecting To User Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($conn); // Closing Connection
    }
}
?>