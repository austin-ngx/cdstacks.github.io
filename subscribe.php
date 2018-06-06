<?php
	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);

	include 'connection.php';
	if(isset($_POST['email'])){
		$sql = "INSERT INTO SUBSCRIPTIONS (ID, EMAIL) VALUES (NULL, '".$_POST['email']."')";
		echo $sql;
		$results = mysqli_query($conn, $sql);
		echo $results;
	}
	else{
		$sql = "INSERT INTO SUBSCRIPTIONS (ID, EMAIL) VALUES (NULL, '".$_GET['email']."')";
		echo $sql;
		$results = mysqli_query($conn, $sql);
		echo $results;
	}
?>