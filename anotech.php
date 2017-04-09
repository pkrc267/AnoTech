<?php

if(!isset($_POST['upload'])){

  print ("Python output: <br>");
  
  exec('python anotech.py', $output);
  print_r($output);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>anotech</title>
</head>
<body>
	<a href="test.html">click</a>
	<iframe src="temp-plot.html" height="400px"width="400px"></iframe>
</body>
</html>