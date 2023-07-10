<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Fruit{
            public $name;
            public $color;
        }

        // create object
        $obj1 = new Fruit();
        // $obj1 is name of object
        // new keyword to create object
        // Fruit() is name of class / constructor

        $obj1->name = "Mango";
        $obj1->color = "Yellow";
        echo $obj1->name." ".$obj1->color;
    ?>
</body>
</html>