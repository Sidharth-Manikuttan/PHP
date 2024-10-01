<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Checker </h1>
    <form method="POST" action="">
        <label for="number">Enter a number</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php
      function isprime($number){
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
        return true; 
    }
      }
    }
      if(isset($_POST["submit"])){
        $number=(int)$_POST['number'];
        if(isprime($number)){
            echo "<p>$number is a prime number.</p>";
        }else{
            echo "<p>$number is not a prime number.</p>";
        }
      }
    ?>
</body>
</html>
