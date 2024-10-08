<?php 
$string1="define and redefine";
$pattern="/def/";
if(preg_match($pattern,$string1)){
    echo "Pattern $pattern found in the string.\n";
}else{
    echo "Pattern $pattern not found in the string.\n";
}
if(preg_match_all($pattern,$string1,$match)){
    echo count($match[0]);
}else{
    echo "Pattern $pattern not found in the string.\n";
}
?>
