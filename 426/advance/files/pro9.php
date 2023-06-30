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
            Mode    a       append
            start           last character
            file exist      append data at end of the file
            not exist       create new file
        */ 
        $myfile = fopen("data2.txt", "a") or die("Unable to open file");
        fwrite($myfile, "Welcome to world of files in PHP");
        fclose($myfile);
    ?>
</body>
</html>