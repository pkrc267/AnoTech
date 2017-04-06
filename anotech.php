<?php

if(!isset($_POST['upload'])){

  print ("Python output: <br>");
  
  exec('python anotech.py', $output);
  print_r($output);
}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>anotech</title>
</head>
<body>
	<a href="test.html">click</a>
</body>
</html>