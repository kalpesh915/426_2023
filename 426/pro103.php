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

        // foreach($student as $value){
        //     echo $value;
        // }

        foreach($student as $key=>$value){
            echo "<hr> $key is $value";
        }
    ?>
</body>
</html>