<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $_SESSION["uname"]="administrator";
     $_SESSION["pwd"]="admin123";
    echo "session variables are set";
    ?>
    <a href="string.php">Hello</a>
    <form method="post" action="">
    <button type="submit" name="submit">logout</button>
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        session_unset();
        echo "session cleared";
    }
    ?>
</body>
</html>
