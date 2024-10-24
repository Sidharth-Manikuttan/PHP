<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sidharthdb";
 $conn = mysqli_connect("localhost", "root", "", "sidharthdb");
 if ($conn) {

    $myText=$_POST["testfield"];
    $myid=$_POST["selectedId"];
    $sql = "UPDATE testdb SET name='I love India' WHERE id=4";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

 }

?>
