<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidharthdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "connected to db<br/>";
    $sql="INSERT INTO testdb(name)VALUES ('$_POST[testfield]')";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo '<br/>Data Inserted successfully';
    }else{
        die ("Error". mysqli_error($conn));
    }
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>
