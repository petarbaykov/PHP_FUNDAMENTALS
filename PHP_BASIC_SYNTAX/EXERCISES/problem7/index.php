<?php 

$string = trim(fgets(STDIN));
$arr = trim(fgets(STDIN));

$arr = explode(" ", $arr);

$arg1 = $arr[0];
$arg2 = $arr[1];

$result = strpos($string,$arg1,strpos($string,$arg1) + (intval($arg2) - 1));
$count = substr_count($string,$arg1);


if($result && $count >= $arg2){
    echo $result;
}else{
    echo "Find the letter yourself!";
}