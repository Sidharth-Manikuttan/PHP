<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $text=strtoupper("sid");
    echo $text;
    function writemsg(){
        echo "<br>Hello world";
    }
    writemsg();
    function family($fname,$year){
            echo "$fname Born in $year <br>";
    }
    family("smith","1975");
    //loosely typed
    function addnum($a,$b){
        return $a+$b;
    }
    echo addnum(5,"5 days");
    function add(&$value){
       $value+=98;
    }
    $num=2;
    add($num);
    echo "Num=$num";
     ?>
</body>
</html>
