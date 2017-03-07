<!DOCTYPE html>
<html>
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
                <a class="navbar-brand make-bold" href="index.php">AnoTech</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="train.php" class="make-bold active"><span class="glyphicon glyphicon-cog"></span> Train</a></li>
                    <li><a href="#" class="make-bold"><span class="glyphicon glyphicon-wrench"></span> Test</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Intro Banner -->
    <div id="test-banner">
        <div class="container">
            <center>
                <div id="test_banner_content" style="align-content: center">
                    <h1 class="animated fadeInUp text-landing">Test the System</h1><br>
                    <h4 class="animated fadeInUp">Lets put that gathered knowledge to use<br><br>
                        Enter the dataset that needs to be tested and the AnoTech system will<br><br>show
                        the anomalous entry in the data.
                    </h4>
                </div>
            </center>
        </div>
    </div>
    <!-- Input form -->
    <hr>
    <div style="width: 100%">
        <h2><b>Let's Test what you have</b></h2><br><br>
        <div class="row" style="width: 100%">
            <form class="form-inline col-xs-offset-1">
                <div class="form-group col-xs-3">
                    <h4><label for="training_file">Upload Test Dataset: </label></h4>
                </div>
                <div class="form-group col-xs-5">
                    <input type="file" accept=".csv" name="training_file">
                </div>
                <div class="form-group">
                    <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                </div>
            </form>
        </div><br>
    </div>
    <hr>
    <br><br>
</body>
