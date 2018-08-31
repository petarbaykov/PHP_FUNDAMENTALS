<?php 

$var = array(1);

if(is_numeric($var)){
    var_dump($var);
}else{
    echo gettype($var);
}