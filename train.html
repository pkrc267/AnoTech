<?php
include 'includes/dbConfig.php'
?>

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
                    <li class=""><a href="#" class="make-bold active"><span class="glyphicon glyphicon-cog"></span> Train</a></li>
                    <li><a href="test.php" class="make-bold"><span class="glyphicon glyphicon-wrench"></span> Test</a></li>
                    <li><a href="preCheck.php" class="make-bold"><span class="glyphicon glyphicon-print"></span> Check Your data</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Intro Banner -->
    <div id="train-banner">
        <div class="container">
            <center>
                <div id="train_banner_content" style="align-content: center">
                    <h1 class="animated fadeInUp text-landing">Train the system</h1><br><br>
                    <h4 class="animated fadeInUp">For the system to detect any Anomaly in the main testing data<br><br>
                        it should first learn from preexisting datasets about the type of entries<br><br>
                        This is called supervised learning.</h4>
                </div>
            </center>
        </div>
    </div>
    <!--PHP incomming -->
    <?php
    //load the database configuration file
    include 'includes/dbConfig.php';

    if(!empty($_GET['status'])){
        switch($_GET['status']){
            case 'succ':
                $statusMsgClass = 'alert-success';
                $statusMsg = 'Members data has been inserted successfully.';
                break;
            case 'err':
                $statusMsgClass = 'alert-danger';
                $statusMsg = 'Some problem occurred, please try again.';
                break;
            case 'invalid_file':
                $statusMsgClass = 'alert-danger';
                $statusMsg = 'Please upload a valid CSV file.';
                break;
            default:
                $statusMsgClass = '';
                $statusMsg = '';
        }
    }
    ?>
    <!-- Input form -->
    <hr>
    <div style="width: 100%">
         <h2>Let's Train our System</h2><br><br>
        <?php if(!empty($statusMsg)){
            echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
        } ?>
        <div class="row" style="width: 100%">
              <form class="form-inline col-xs-offset-1" action="importData.php" method="post" enctype="multipart/form-data">
                  <div class="form-group col-xs-2">
                      <h4><label for="training_file">Feed Dataset: </label></h4>
                  </div>
                  <div class="form-group col-xs-5">
                      <input type="file" accept=".csv" name="training_file" id="training_file">
                  </div>
                  <div class="form-group">
                      <input type="submit" id="upload" name="upload" class="btn btn-primary" value="Upload">
                  </div>
              </form>
        </div>
        <br>
        <hr>
        <br>
        <div class="row" style="width: 100%;">
            <div class="col-xs-offset-1 col-xs-5">
                <br>
                <img class="img-responsive" src="img/index_testing.jpg" alt="testing">
            </div>
            <div class="col-xs-offset-1 col-xs-5">
                <h3>Done with training!</h3><br>
                <p><b>Let's put that knowledge to use for Testing<br>Keep the Testing dataset ready to upload</br></b></p><br>
                <a href="test.php"><button class="btn btn-primary">Testing</button></a>
            </div>
        </div>
    </div>
    <br><br>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>

<?php
//include 'includes/dbConfig.php';
/*if(isset($_FILES['training_file'])){

    $trainingFileName = $_FILES['training_file']['name'];
    $tmpNameTraingingFile = $_FILES['training_file']['tmp_name'];
    $trainingFileSize = $_FILES['training_file']['size'];

    $fp = fopen($tmpNameTraingingFile, 'r');
    $content_training = fread($fp,filesize($tmpNameTraingingFile));
    fclose($fp);

    $query = "INSERT INTO file_base(name, size, training_set) VALUES('$trainingFileName','$trainingFileSize','$content_training')";

    mysqli_query($query) or die(mysqli_error($con));

    $qstatus = '?status=succ';
}
else{
    $qstatus = '?status=err';
}

//redirecting to another page
header("Location: test.php".$qstatus);
*/
?>