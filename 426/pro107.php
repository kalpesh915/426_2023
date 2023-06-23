<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cars = [
            "car1"=>["model"=>"innova", "fuel"=>"diesel", "seats"=>"8 seater", "city"=>"Rajkot"],
            "car2"=>["model"=>"XUV", "fuel"=>"diesel", "seats"=>"8 seater", "city"=>"Rajkot"],
            "car3"=>["model"=>"I20", "fuel"=>"Petrol", "seats"=>"5 seater", "city"=>"Surat"],
            "car4"=>["model"=>"Wagon r", "fuel"=>"CNG", "seats"=>"4 seater", "city"=>"Rajkot"]
        ];

        foreach($cars as $car){
            foreach($car as $key=>$value){
                echo $key, " ",$value," ";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>