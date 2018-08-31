<?php 

$string = trim(fgets(STDIN));

if(strlen($string) >= 20 ){
    echo substr($string,0,20);
}else{

    echo $string . str_repeat("*",20 - strlen($string));
}