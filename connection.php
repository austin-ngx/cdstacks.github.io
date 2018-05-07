<?php
$servername = "http://206.189.152.236/phpmyadmin/";
$username = "access";
$password = "thisisaseriouslylongpassword";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>