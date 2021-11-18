<?php
$servername = "localhost";
$username = "feonnaa_fcheck";
$password = "Abbas@1995";
$db="feonnaa_facademy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 //echo "Connected successfully";
?> 