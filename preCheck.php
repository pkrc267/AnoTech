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

    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="http://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['controls', 'charteditor']}]}"></script>
    <script src="js/jquery.csv.js"></script>
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
                    <li class=""><a href="train.php" class="make-bold"><span class="glyphicon glyphicon-cog"></span> Train</a></li>
                    <li><a href="test.php" class="make-bold"><span class="glyphicon glyphicon-wrench"></span> Test</a></li>
                    <li><a href="preCheck.php" class="make-bold"><span class="glyphicon glyphicon-print"></span> Check Your data</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Banner-->
    <div class="jumbotron precheck-banner">
        <div class="container animated fadeInUp">
            <h1 style="color: #fff">Check Your Data</h1>
            <p>Welcome to the pre-check module. Lets check your data. Shall we!!</p>
        </div>
    </div>

    <!--Description-->
    <div class="page-header">
        <div class="container">
            <h2>Check how your data Looks</h2>
            <p>
                Just choose upload your dataset, and you are done!<br>
                Yup!! That easy!<br>
                Moreover, please your eyes from various different charts to visualize your data.<br>
            </p>
            <p>
                <br>
                Go ahead! Try it...<br>
                Enter the csv file by clicking on the button to choose.<br>
                Then click the type of graph you want to see for your data.<br>
            </p>
        </div>
        <br><br><br>
        <div id="chart-display" class="container">
            <form class="form-inline">
                <div class="form-group">
                    <input id="files" type="file" name="file" />
                </div>
                <div class="form-group">
                    <input id="edit" type="button" value="Graph Types" />
                </div>
            </form>
            <div id="dashboard" style="display:block; margin:0 auto; width:800px; height:400px;">
                <div id="chart"></div>
                <div id="control"></div>
                <div id="padding" style="display:block; height:50px; background-color:white; visibility:hidden;"></div>
            </div>
        </div>
    </div>

    <?php
        include "includes/visual_script.php"
    ?>

    <?php
        include "includes/footer.php";
    ?>

</body>
</html>