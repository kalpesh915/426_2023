<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jsonString = '{"students":
            [{"roll":1, "fname":"nikhil", "lname":"Dobariya", "city":"Rajkot"},
            {"roll":2, "fname":"Sanket", "lname":"Ramanuj", "city":"Rajkot"}]
        }';

        //$phpArray = json_decode($jsonString); // convert to php Object
        $phpArray = json_decode($jsonString, true); // convert to php Array
        
        foreach($phpArray as $student){
            echo "<hr>";
            print_r($student);
        }
    ?>
</body>
</html>