<?php 


$group = intval(fgets(STDIN));
$package = trim(fgets(STDIN));

$hallPrice = null;
$hall = "";
$packagePrice = null;
$packageDisocunt = null;
if($group <= 50) {
    $hall = "Small Hall";
    $hallPrice = 2500;
}else if($group <= 1000) {
    $hall = "Terrace";
    $hallPrice = 5000;
}else if($group <= 120) {
    $hall = "Great Hall";
    $hallPrice = 7500;
}else if($group > 120){
    echo "We do not have an appropriate hall.";
    exit;
}


if($package == "Normal" ){
    $packagePrice = 500;
    $packageDisocunt = 5;
}else if($package == "Gold"){
    $packagePrice = 750;
    $packageDisocunt = 10;
}else if($package == "Platinum"){
    $packagePrice = 1000;
    $packageDisocunt = 15;
}

$total = $packagePrice + $hallPrice ;
$total = $total - ($total * ($packageDisocunt / 100 ));
$total = number_format($total / $group, 2);

echo "We can offer you the " . $hall . "\n";
echo "The price per person is " . $total . "$";

