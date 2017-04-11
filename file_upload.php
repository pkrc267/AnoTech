<?php
/**
 * Created by PhpStorm.
 * User: C B Yadava
 * Date: 11-04-2017
 * Time: 03:22 PM
 *
 * its purpose is to upload the training and testing datasets into the server
 * the files will be uploaded to Uploads directory
 */
  if(isset($_POST['upload'])){
      $UploadName = $_FILES['uploadFileField']['name'];
      $UploadTmp = $_FILES['uploadFileField']['tmp_name'];

      if (!$UploadTmp){
          die('No file selected, please upload again');
      }
      else{
          move_uploaded_file($UploadTmp, "Uploads/$UploadName");
      }
  }

  if (isset($_POST['analyse'])){
      exec('python anotech.py', $output);
      print_r($output);

      echo "<script>setTimeout(\"location.href = 'thanks.php';\",1500);</script>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnoTech</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand make-bold active" href="index.php">AnoTech</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li class=""><a href="train.php" class="make-bold"><span class="glyphicon glyphicon-cog"></span> Train</a></li>
                    <li><a href="test.php" class="make-bold"><span class="glyphicon glyphicon-wrench"></span> Test</a></li>-->
                    <li><a href="file_upload.php" class="make-bold"><span class="glyphicon glyphicon-upload"></span> Upload Files</a></li>
                    <li><a href="preCheck.php" class="make-bold"><span class="glyphicon glyphicon-print"></span> Check Your data</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Banner-->
    <div class="jumbotron precheck-banner">
        <div class="container animated fadeInUp">
            <h1 style="color: #fff">Upload Data Sets</h1>
            <p>Lets feed the system with the data!</p>
        </div>
    </div>

    <!-- Description -->
    <div class="page-header">
        <div class="container">
            <h2>Upload your datasets</h2>
            <p>
                Just upload the data sets into our servers one after the other<br>
                <b>Prerequisite:</b><br>
                Name the dataset before uploading as:<br>
                Traing set &nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span> &nbsp; train.csv<br>
                Testing set &nbsp;<span class="glyphicon glyphicon-arrow-right"></span> &nbsp; test.csv<br>
                <br><br>
                After the datasets have been uploaded press the <b>Analyse Button</b><br>
                and let our system work for you &nbsp;&nbsp;<span class="glyphicon glyphicon-dashboard"></span>
            </p>
        </div>
    </div>

    <!-- File Upload Form -->
    <div class="row" style="width: 100%">
        <form class="form-inline col-xs-offset-1" action="file_upload.php" method="post" enctype="multipart/form-data" name="fileUploadForm" id="fileUploadForm">
            <div class="form-group col-xs-2">
                <h4><label for="uploadFile">Feed Datasets: </label></h4>
            </div>
            <div class="form-group col-xs-5">
                <input type="file" accept=".csv" name="uploadFileField" id="uploadFileField">
            </div>
            <div class="form-group">
                <input type="submit" id="upload" name="upload" class="btn btn-primary" value="Upload"> &nbsp;&nbsp;
            </div>
            <div class="form-group">
                <input type="submit" id="analyse" name="analyse" class="btn btn-success" value="Analyse">
            </div>
        </form>
    </div>

    <?php
    include "includes/footer.php";
    ?>

</body>
</html>
