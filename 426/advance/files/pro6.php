<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Mode    r       read
            start           first character
            file exist      read
            not exist       error
        */ 
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        while(!feof($myfile)){
            echo fgets($myfile)."<hr>";
        }
        fclose($myfile);
    ?>
</body>
</html>