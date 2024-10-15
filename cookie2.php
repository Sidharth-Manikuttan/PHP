<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <div>
            <label>Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name"><br/>
            <label>Height:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="height"><br/>
            <label>Favorite Color:</label>&nbsp;
            <input type="text" name="color"><br/>
        </div>
        <p>
            <input type="submit" name="submit" value="Write Cookie">
        </p>
    </form>
    <?php 
    if(iiset($_POST["submit"])){
        define("FIVE_DAYS",60*60*24*5);
        setcookie("name",$_POST["name"],time()+FIVE_DAYS);
        setcookie("height",$_POST["height"],time()+FIVE_DAYS);
        setcookie("color",$_POST["color"],time()+FIVE_DAYS);
        $name=$_COOKIE["name"];
        $height=$_COOKIE["height"];
        $color=$_COOKIE["color"];
        echo "Cookies nare set with the following data";
        echo "<p>$name</p> <p>$height</p> <p>$color</p>";

    }
    ?>

</body>
</html>
