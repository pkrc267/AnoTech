<?php

/*  tempo.php(this file) and importData.php,
 *  both are used for testing purpose
 *  in this project.
 *
 */



$connect = mysqli_connect('localhost','root','','anotech');
echo "connected";
/*if(empty($_SERVER['CONTENT_TYPE']))
{
    $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}
*/
var_dump( $_POST );
if(isset($_POST["submit"]))
{
    echo "submit pressed";
    if($_FILES['file']['name'])
    {
        $filename = explode(".",$_FILES['file']['name']);
        echo "file exploded";
        if($filename[1] == 'csv')
        {
            $handle = fopen($_FILES['file']['tmp_name'],'r');
            echo "file is csv and reading";
            while ($data = fgetcsv($handle))
            {
                $item1 = mysqli_real_escape_string($connect,$data[0]);
                $item2 = mysqli_real_escape_string($connect,$data[1]);
                $item3 = mysqli_real_escape_string($connect,$data[2]);
                $query = "INSERT INTO file_val(timestamp,value,anomaly) VALUES('$item1','$item2','$item3')";
                mysqli_query($connect,$query);
            }
            fclose($handle);
            print('file imported');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>temp</title>
</head>
<body>

    <!--
    <form method="POST" action="<?php // echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    -->
    <form method="POST" action="tempo.php" enctype="multipart/form-data">
        <div align="center">
            <p>Upload CSV: <input type="file" name="file"></p>
            <p><input type="submit" name="submit" value="Import"></p>
        </div>
    </form>

</body>
</html>