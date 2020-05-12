<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p{
        color:blue;
    }
    img{
        width:100px;
    }
    </style>
</head>
<body>
<h1>My first PHP page</h1>

<?php

// function startsWith ($string, $startString) 
// { 
//     $len = strlen($startString); 
//     return (substr($string, 0, $len) === $startString); 
// } 

// function getImg($dir){
//     $dir = './img/item/';
// $files = scandir($dir);

// // print_r($files);

// foreach($files as $img){
//     // if(strpos($img,'.jpg')|| strpos($img,'.jpeg')|| strpos($img,'.png') || strpos($img,'.gif')){
//     //     // echo '<img src="'.$dir.$img.'">';
//     //     echo '<p>'.$img.'</p>';
//     // }

//     if(startsWith($img,'item_2') && (strpos($img,'.jpg')|| strpos($img,'.jpeg')|| strpos($img,'.png') || strpos($img,'.gif'))){
//         echo '<p>'.$img.'</p>';
//         echo 'in <br>';
//     }
// }
// }
// getImg("./img/item/");

// echo "test";


// $dir = './img/item/';
// $csv = fopen($dir.'book1.csv','r');
// while (($data = fgetcsv($csv)) !== FALSE) {
//     echo '<img src="'.$dir.$data[0].'">';
//     echo '<p>'.$data[1].'</p>';
//     echo '<h1>'.$data[2].'</h1>';
// }

$fileName = './img/item/book1.csv';
if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {
  $dir = './img/item/';
    $csv = fopen($dir.'book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
        echo '<img src="'.$dir.$data[0].'">';
        echo '<p>'.$data[1].'</p>';
        echo '<h1>'.$data[2].'</h1>';
    }
}
  else
  {
    echo $fileName." does not exist";
  }

fclose($csv);
?> 
</body>
</html>