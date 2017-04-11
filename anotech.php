<?php

if(!isset($_POST['upload'])){

 print ("Python output: <br>");
 
 exec('python anotech.py', $output);
 print_r($output);
 // header('Content-Type: image/png');
 // $im = imagecreatefrompng("/images/img.png");
 // imagepng($im);
 // imagedestroy($im);
 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>anotech</title>
</head>
<body>

<a href="test.php">test</a>
 <img src="test.png">
 <img src="test.png">
</body>
</html>