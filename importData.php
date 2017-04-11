<?php

/*
 * importData.php(this file),
 * is used for feeding the training dataset into the database.
 */

//load the database configuration file
include 'includes/dbConfig.php';
/*
if(isset($_POST['upload'])){

    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

    if(!empty($_FILES['training_file']['name']) && in_array($_FILES['training_file']['type'],$csvMimes))    //checks if the file type matches the types in csvMimes array
    {
        if(is_uploaded_file($_FILES['training_file']['tmp_name']))  //checks if the file is uploaded
        {

            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['training_file']['tmp_name'], 'r');

            //first call to fgetcsv is to skip first line.
            fgetcsv($csvFile);

            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE)
            {
                    //insert member data into database
                    $db->query("INSERT INTO anotech.file_val (timestamp, value, anomaly) VALUES ('$line[0]','$line[1]','$line[2]')");
            }

            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
*/
if(isset($_POST['upload'])) {

    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

    if (!empty($_FILES['training_file']['name']) && in_array($_FILES['training_file']['type'], $csvMimes))    //checks if the file type matches the types in csvMimes array
    {
        if (is_uploaded_file($_FILES['training_file']['tmp_name']))  //checks if the file is uploaded
        {
            $fileName = $_FILES['training_file']['name'];
            $tmpName  = $_FILES['training_file']['tmp_name'];
            $fileSize = $_FILES['training_file']['size'];
            $fileType = $_FILES['training_file']['type'];

            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            //$content = addslashes($content);
            fclose($fp);

            $db->query("INSERT INTO anotech.file_base (name, size, training_set) VALUES ('$fileName', '$fileSize', '$content')") or die('Error, query failed');

            echo "<br>File $fileName uploaded<br>";
            $qstring = '?status=succ';
        }else{$qstring = '?status=err';}
    }else{$qstring = '?status=invalid_file';}
}


//redirect to the listing page
header("Location: redirect_after_train.php".$qstring);