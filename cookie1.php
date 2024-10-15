<?php 
$cookie_name="user";
$cookie_value="admin123";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie named ".$cookie_name." is notset!";
        }
        else{
            echo "cookie $cookie_name is set!<br>";
            echo "value is $_COOKIE[$cookie_name] <br>";
        }
        ?>
    </body>
</html>
