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
            associative array store values in key and value pair
        */ 
        $students = ["Kairvi"=>12, "Ganga"=>54, "Dev"=>47, "Hemang"=>66, "Vivek"=>52, "Sunny"=>53, "Harshil"=>59];

        $length = count($students);

        foreach($students as $tmp){
            echo "<hr> Welcome $tmp";
        }
    ?>
</body>
</html>