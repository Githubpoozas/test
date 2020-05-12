<?php

$strJsonFileContents = file_get_contents("color.json");
// var_dump($strJsonFileContents); 
$array = json_decode($strJsonFileContents, true);
var_dump($array); 
echo $array["aqua"];