<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pattern finding</h1>
    <form method="POST" action="">
        <label for="inputString">Enter String</label>
        <input type="text" id="inputString" name="inputString" required><br/><br>
        <label for="inputString">Enter Pattern</label>
        <input type="text" id="inputpattern" name="inputpattern" required><br><br>
        <button type="submit" name="submit">Search my pattern in my String</button><br><br>
    </form>
    <?php 
     if(isset($_POST["submit"])){
        $inputString=$_POST['inputString'];
        $inputpattern=$_POST['inputpattern'];
        $inputpattern1='/'.$inputpattern.'/';
        if(preg_match($inputpattern1,$inputString)){
            echo "Pattern $inputpattern found in the string.\n";
        }else{
            echo "Pattern $inputpattern not found in the string.\n";
        }

    }
    ?>
</body>
</html>
