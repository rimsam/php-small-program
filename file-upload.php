<?php
if(isset($_FILES['user_file'])){
    echo "<pre>";
    print_r($_FILES['user_file']);
    echo "</pre>";
    $name = $_FILES['user_file']['name'];
    $size = $_FILES['user_file']['size'];
    echo $name;
    echo round($size/1024, 2) . "KB";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload </title>
</head>
<body>
    
<form method="post" enctype="multipart/form-data">
        Upload Your File: <input type="file" name="user_file">
        <input type="submit">
        </form>
</body>
</html>
