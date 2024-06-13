<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "minted, marychris";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
}
echo "Sucessfully Connected!";
?>