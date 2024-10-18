<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidharthdb";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected to " . $dbname . " successfully";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
else{
    echo "connection to ". $dbname." Established successfully";
}
?>
