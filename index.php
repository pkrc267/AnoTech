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
                <a class="navbar-brand make-bold active" href="#">AnoTech</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="train.php" class="make-bold"><span class="glyphicon glyphicon-cog"></span> Train</a></li>
                    <li><a href="test.php" class="make-bold"><span class="glyphicon glyphicon-wrench"></span> Test</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Banner image-->
   <div id="banner-image">
       <div class="container">
           <center>
               <div id="banner_content" style="align-content: center">
                   <h1 class="animated fadeInUp">Welcome to AnoTech</h1>
                   <!--TODO: make this animate fadeInUp-->
               </div>
           </center>
       </div>
   </div>

    <!--Training section-->
    <div class="container-fluid">
            <div id="train-section">
                <div class="train-content">
                    <h3>Baby needs to learn how to walk before running<br>
                        Proceed to training section so that our system can learn from you.</h3>
                    <a href="train.php" class="btn btn-warning btn-lg active">Train</a>
                </div>
            </div>
    </div>
    <!--Testing Section-->
    <div class="container-fluid">
        <div id="test-section">
            <div class="test-content">
                <h3>Baby learnt a lot!? Lets implement its knowledge<br>
                    Proceed to testing section when through with the training part.
                </h3>
                <a href="test.php" class="btn btn-danger btn-lg active" style="margin-top: 5%">Test</a>
            </div>
        </div>
    </div>
</body>
