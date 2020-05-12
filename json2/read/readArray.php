
<?php

$strJsonFileContents = file_get_contents("color2.json");
// var_dump($strJsonFileContents); 
$array = json_decode($strJsonFileContents, true);
var_dump($array); 
echo $array[2];