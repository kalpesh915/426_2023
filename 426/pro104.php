<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = ["roll"=>123, "fname"=>"Hemang", "lname"=>"Baldha", "city"=>"Rajkot", "course"=>"BE", "college"=>"GEC", "marks"=> ["sub1"=>65, "sub2"=>64, "sub3"=>52]];

        echo $student["marks"]["sub3"];

    ?>
</body>
</html>