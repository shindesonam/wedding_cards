<?php
$servername = "localhost:10080";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysql_select_db("wedding", $con);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>