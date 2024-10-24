<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Update3.php" method="post">
    <p><label>Enter the ID to update</label><br/>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sidharthdb";
    $conn = mysqli_connect("localhost", "root", "", "sidharthdb");
    if ($conn) {
        $sql = "SELECT * FROM testdb";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            echo '<select name="selectedId">';
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                echo '<option value="' . $id . '">' . $id . '</option>';
            }
            echo '</select>';
        }
    }else{
        die("connection failed".mysqli_connect_error());
    }
    ?>
    <br/>
    <label>Enter the text to update</label><br/>
    <input type="text" name="testfield" size="30"/><br/>
    <input type="submit" name="submit" value="Update record"/>

</form>
</body>
</html>
