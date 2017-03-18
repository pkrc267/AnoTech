<?php
/**
 * Created by PhpStorm.
 * User: Prakhar
 * Date: 11-03-2017
 * Time: 08:49 AM
 *
 * Redirecting page that will process all the data, i.e. calculate
 * mean, standard deviation and epsilon from training set,
 * and then redirect to test.php
 */

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully. Please wait while we redirect...';
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


if(!empty($statusMsg)){
    echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    sleep(4);
}


//redirect to test.php
//header("Location: test.php");
//using java script to redirect instead of using php header
echo "<script>setTimeout(\"location.href = 'test.php';\",1500);</script>";
?>
