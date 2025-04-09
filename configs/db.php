<?php
// Database Connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$databasename = "bms";
$port = 3307; // Specify your MySQL port

$conn = mysqli_connect($host, $dbusername, $dbpassword, $databasename, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; // To verify if connection works
?>
