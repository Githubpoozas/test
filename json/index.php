<?php
$message = "";
$error = "";
$target_dir = "./";
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
        $error = "<label class='error'>Enter Name</label><br/>";

    } else if(empty($_POST["gender"])){
        $error = "<label  class='error'>Enter Gender</label><br/>";

    } else if(empty($_POST["designation"])){
        $error = "<label  class='error'>Enter Designation</label><br/>";
    } else {

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
        }

        if(!file_exists('data.json')){
            fopen('data.json','w');
            $error = "JSON has been created";
        }
        if(file_exists('data.json')){
            $current_data = file_get_contents('data.json');
            $array_data = json_decode($current_data,true);
            $extra = array(
'name' => $_POST['name'],
'gender' => $_POST['gender'],
'designation' => $_POST['designation']
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('data.json',$final_data)){
                $message = "<label>File Append Success</label>";
            }
        } else{
            $error = "JSON FILE not exit";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <?php
    if(isset($error)){
        echo $error;
    }
            ?>
            <label>Name:</label><br/>
            <input type="text" name="name"><br/>
            <label>Gender:</label><br/>
            <input type="text" name="gender"><br/>
            <label>Designation</label><br/>
            <input type="text" name="designation"><br/>
            <label for="img">Img</label><br>
            <input type="file" name="fileToUpload" accept="image/*"><br>
            <input type="submit" name="submit" value="submit"><br/>
            <?php
    if(isset($message)){
        echo $message;
    }
            ?>
        </form>
    </div>
</body>
</html>