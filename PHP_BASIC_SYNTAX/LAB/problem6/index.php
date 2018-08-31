<?php 

$word = fgets(STDIN);
$word = trim($word);
$letters = [];
for($i = 0; $i < strlen($word); $i++){
    if(!array_key_exists($word[$i],$letters)){
        $letters[$word[$i]] = 0;
    }
    $letters[$word[$i]]++;
}
arsort($letters);
foreach($letters as $key => $value){
    echo $key . ' -> '. $value . "\n";
}