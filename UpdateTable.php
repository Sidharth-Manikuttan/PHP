<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidharthdb";


$conn = mysqli_connect("localhost", "root", "", "sidharthdb");


if ($conn) {

    $sql = "UPDATE testdb SET name='I love India' WHERE id=4";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

$sql = "SELECT * FROM testdb";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    echo "<table border='border' width='300'><tr><th>id</th><td width='250'>My Message</td></tr>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>
