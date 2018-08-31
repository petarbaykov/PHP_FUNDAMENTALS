<?php 

$largest = -1;
while( $number = intval(fgets(STDIN))){
    $largest = max ($largest,$number);
}
echo 'MAx ' . $largest;