<?php
/**
 * Created by PhpStorm.
 * User: C B Yadava
 * Date: 11-04-2017
 * Time: 05:14 PM
 *
 * this is just to show final page after the results have been shown
 * this will ask the users if they want to use the system again
 * and redirect them to the uploads.php page where they can use the system again
 */
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
<body class="body-color">
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

    <!--Banner image-->
    <div id="banner-image">
        <div class="container">
            <center>
                <div id="banner_content" style="align-content: center">
                    <h1 class="animated fadeInUp">Thank You</h1>
                    <h3>Want to try us again?</h3>
                    <a href="file_upload.php" class="btn btn-primary btn-lg active">Push me!</a>
                </div>
            </center>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    ?>
</body>
</html>
