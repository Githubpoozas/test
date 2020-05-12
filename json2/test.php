
<!DOCTYPE html>
<html>
<body>

<?php
// $file = fopen("data.json","r");
// //Output lines until EOF is reached
// while(! feof($file)) {
//   $line = fgets($file);

//   echo $line. "<br>";
// }
// fclose($file);

// $file =  file_get_contents("data.json");
// echo $file;
// echo gettype($file);
// var_dump(json_decode($file,true));


// $age = array("Peter"=>35, "Ben"=> array("test" => 25), "Joe"=>43);

// echo json_encode($age["Ben"]["test"]);

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43,"Test":{"One": 25}}';
// echo gettype($jsonobj)."<br>";

// $obj = json_decode($jsonobj);

// foreach($obj as $key => $value) {
//   echo $key . " => " . $value . "<br>";
// }

// $arr[0]["CustomerID"]="C001";
// $arr[0]["Name"]="Weerachai Nukitram";
// $arr[0]["Email"]="win.weerachai@thaicreate.com";
// $arr[0]["CountryCode"]="TH";
// $arr[0]["Budget"]=1000000;
// $arr[0]["Used"]="600000";
// $arr[1]["test"] = [100,200];
// echo json_encode($arr);


$arr = file_get_contents("person.json");
echo json_decode($arr,true);


// echo gettype($arr);

// foreach($arr[0] as $key => $value){
//     echo $key."=>".$value."<br>";
// }

// $test = array("testsasdfasdf","asdfasfsadf",5555,array(11111111111,22222222222));
// echo $test;
// print_r($test);
// echo gettype($test);

// foreach($test as $value){
//     if(gettype($value) !== "array"){
//         echo $value."<br>";
//     } else {
//         foreach($value as $element){
//             echo "innerLevel:".$element."<br>";
//         }
//     }
// }

// $file =  file_get_contents("detail.json");
// var_dump($file);
// $arr = json_encode($file);
// var_dump($arr);
// echo $arr[0];

?>

</body>
</html>