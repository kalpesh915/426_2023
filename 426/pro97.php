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
        
        $length = count($students);

        for($i=0; $i<$length; $i++){
            echo "<hr>Welcome ".$students[$i];
        }
    ?>
</body>
</html>