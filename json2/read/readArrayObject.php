
<?php

// Get the contents of the JSON file 
$strJsonFileContents = file_get_contents("css-color-names.json");
var_dump($strJsonFileContents); // show contents

echo "<br><br>";
$array = json_decode($strJsonFileContents, true);
var_dump($array); // print array

echo "<br><br>";

// echo $array["azure"][1];
echo $array["azure"][1]["22222"];

echo "<br><br>";

echo $array["bisque"]["object"][0];
