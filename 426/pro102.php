<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = ["roll"=>123, "fname"=>"Hemang", "lname"=>"Baldha", "city"=>"Rajkot", "course"=>"BE", "college"=>"GEC"];

        echo $student["fname"]," ",$student["lname"]," ",$student["roll"];
    ?>
</body>
</html>