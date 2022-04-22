<?php
$text = "";
if (isset($_POST["message"])){
    if(strlen($_POST["text"]) < 11 ){
      $text = $_POST ["text"];
    }else{
        echo "Your Text Length is: " . strlen($_POST["text"]);
    }
}
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Text Length Check</title>
    </head>

    <body>
        <form method="post">
            <input type="text" name="text" id="message">
            <input type="submit" value="Message" name="message" >
        </form>
        <?php echo $text; ?>
    </body>

    </html>
