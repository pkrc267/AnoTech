<?php

if(isset($_POST['upload'])){

  print ("Python output: <br>");
  
  exec('python anotech.py', $output);
  print_r($output);

}

?>
