<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = [
            ["roll"=>123, "fname"=>"Vivek", "lname"=>"dodiya", "city"=>"Rajkot"], 
            ["roll"=>124, "fname"=>"Hemang", "lname"=>"Baldah", "city"=>"Rajkot"] 
        ];

        echo json_encode($students);
    ?>
</body>
</html>