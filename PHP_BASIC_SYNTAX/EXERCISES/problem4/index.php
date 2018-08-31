<?php 

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

$start = intval(min($num1,$num2));
$end = intval(max($num1,$num2));

for($i = $start;$i<$end;$i++){
    echo $i . "\n";
}