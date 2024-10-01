<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Word Count in astring</h1>
    <form method="POST" action="">
        <label for="inputString">Enter a number</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit" name="submit">Count</button>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $inputString=$_POST['inputString'];
        $word_count=str_word_count($inputString);
        echo "<p>Total Word Count = $word_count</p>";
    }
    ?>
</body>
</html>
