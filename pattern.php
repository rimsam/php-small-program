<?php
$patt ="";
if(isset($_POST["print"])){
    $patt = $_POST["num"];
      for($p=0 ; $p<$patt ; $p++){
        
          for($q=0 ; $q<=$p ; $q++){
              echo "<b>0</b>";
          }
          echo "<br>";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattarn Printing</title>
</head>
<body>
       <form method="post">
        <input type="number" name="num">
        <input type="submit" value="Print" name="print">
    </form>
    <h1><u>Pattern Printing</u></h1>
 
</body>
</html>
