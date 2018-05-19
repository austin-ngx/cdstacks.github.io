

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'shop');
define('DB_USER','access');
define('DB_PASSWORD','onetwothreefour5');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$id = $_POST['regID'];
	$pwd = $_POST['regPassword'];
	$email = $_POST['regEmail'];
	$query = "INSERT INTO USERINFO (USER_NAME,USER_PASSWORD,USER_EMAIL) VALUES ('$id','$pwd','$email')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['regID']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM USERINFO WHERE USER_NAME = '$_POST[regID]' AND pass = '$_POST[regPassword]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['registerBtn']))
{
	SignUp();
}
?>