<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <?php
function addClass($text,$class,$id){
    echo '<p class="'.$class.'" id="'.$id.'">'.$text.'</p>';
}

addClass('this is text','classText',null);
    ?>
</body>
</html>