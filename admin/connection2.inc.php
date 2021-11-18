<?php
$servername = "localhost";
$username = "feonnaah_admin";
$password = "Abbas@1995";
$db="feonnaah_fexternal";

// Create connection
$conn2 = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 //echo "Connected successfully";
?> 