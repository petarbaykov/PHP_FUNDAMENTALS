<?php 

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
$num3 = intval(fgets(STDIN));

$largestFromOneTwo = $num1;

if($num2 > $num1) {
    $largestFromOneTwo = $num2;
}

if($largestFromOneTwo > $num3){
    echo 'Max' . $largestFromOneTwo;
}else{
    echo 'Max' . $num3;
}