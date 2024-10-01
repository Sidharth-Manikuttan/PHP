<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars=array("subru","toyota","bmw");
    $mon=array("january"=>"first","Febuary"=>"second","March"=>"Third");
    foreach($cars as $x){
        print($x."<br>");
    }
    foreach($mon as $monname=>$monvalue){
        print("<p>$monname is the $monvalue month</p>");
    }
    $str="May god bless you";
    $word=explode(" ",$str);
    foreach($word as $x){
        print($x."<br>");
    }
    sort($cars);
    foreach($cars as $x){
        print($x."<br>");
    }
    $w=array("hello","my","name","is","sid");
    $scen=implode(" ",$w);
    print $scen;
    rsort($cars);
    foreach($cars as $x){
           print($x."<br>");
       }
    $age=array("peter"=>"45","ben"=>"47","joe"=>"43");
    asort($age);
    foreach($age as $x=>$x_value){
        print("<p>$age $x_value</p>");
        }
    $remo="bmw";
    $index=array_search($remo,$cars);
    if($index!==false){
        echo "true";
    }
    $array1=array('a','1','2','3','4');
    $array2=array('1','a');
    if(array_intersect($array2,$array1)===$array2){
        echo "<br/>It is a subset<br/>";
    }else{
        echo "Not a Subset";
    }
    $ages=array("Harry"=>21,"Alice"=>20,"Megha"=>22,"Bob"=>19);
    $ages["Megha"] = 28;
    asort($ages);
    foreach ($ages as $agename=>$agevalue){
        print("$agename : $agevalue");
    }
    ?>
</body>
</html>
