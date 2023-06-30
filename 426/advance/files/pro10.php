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
            Mode    x       no create mode
            start           first character
            file exist      error
            not exist       create new file
        */ 
        $myfile = fopen("data3.txt", "x") or die("Unable to open file");
        fwrite($myfile, "Welcome to world of files in PHP");
        fclose($myfile);
    ?>
</body>
</html>