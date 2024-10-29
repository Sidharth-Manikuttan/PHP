<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
<?php
// Display error message if set
if (isset($errorMessage)) {
    echo "<p style='color: red;'>$errorMessage</p>";
}
?>
    Enter your Username and Password in the form<br/>
and hit Login button<br/>

<form method="post">
    UserName: <input name="myUname" type="text" /><br/>
    Password: <input name="myPass" type="password" /><br/>
    <input type="submit" name="submit" value="Login" />
</form>
    <?php
session_start();

if (isset($_POST['submit'])) {
    if (!empty($_POST['myUname']) && !empty($_POST['myPass'])) {
        $inputUname = $_POST['myUname'];
        $inputPass = $_POST['myPass'];
        
        if ($inputUname == "admin" && $inputPass == "admin123") {
            $_SESSION["uname"] = $inputUname;
            header("Location: welcome1.php");
            exit();
        } else {
            $errorMessage = "Incorrect username or password";
        }
    } else {
        $errorMessage = "Enter username and password";
    }
}
?>

</body>
</html>
