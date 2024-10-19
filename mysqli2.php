<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="username">Username:</label><br><br>
        <input type="text" name="testfield"><br><br>
        <button type="submit" name="submit">Insert</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
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
}
    ?>
</body>
</html>
