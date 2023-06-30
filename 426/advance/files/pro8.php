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
            Mode    w       write
            start           first character
            file exist      overwrite
            not exist       create new file
        */ 
        $myfile = fopen("data1.txt", "w") or die("Unable to open file");
        fwrite($myfile, "Welcome to world of files in PHP");
        //fputs($myfile, "welcome ");
        fclose($myfile);
    ?>
</body>
</html>