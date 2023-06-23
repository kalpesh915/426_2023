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
            ["innova", "diesel", "8 seater", "Rajkot"],
            ["XUV", "diesel", "8 seater", "Rajkot"],
            ["I20", "Petrol", "5 seater", "Surat"],
            ["Wagon r", "CNG", "4 seater", "Rajkot"]
        ];

        //print_r($cars);

        echo $cars[2][1];
    ?>
</body>
</html>