<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students[0] = "Aashita";
        $students[1] = "Vivek";
        $students[2] =  "Harshil";

        foreach($students as $tmp){
            echo "<hr>Welcome ".$tmp;
        }
    ?>
</body>
</html>