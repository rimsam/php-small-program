<?php
if($_POST){
//get the url
$url = $_POST['url'];

//add time to the current filename
$name = basename($url);
list($txt, $ext) = explode(".", $name);
$name = $txt.time();
$name = $name.".".$ext;

//check if the files are only image / document
if($ext == "jpg" or $ext == "png" or $ext == "gif" or $ext == "doc" or $ext == "docx" or $ext == "pdf"){
//here is the actual code to get the file from the url and save it to the uploads folder
//get the file from the url using file_get_contents and put it into the folder using file_put_contents
$upload = file_put_contents("uploads/$name",file_get_contents($url));
//check success
if($upload)  echo "Success: <a href='uploads/".$name."' target='_blank'>Check Uploaded</a>"; else "please check your folder permission";
}else{
echo "Please upload only image/document files";
}
}
?>

<html>
<head><title>File Upload from URL Script!</title></head>
<body>
<h3>File Upload from URL Script!</h3>
Paste the url and hit enter!
    <form action="" method="post">
        Your URL: <input type="text" name="url" />
    </form>
</body>
</html>
