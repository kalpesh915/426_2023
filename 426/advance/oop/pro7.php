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

            public function __construct(){
                echo "<hr> Object Created";
            }

        }
        
        $obj1 = new Fruit();
        $obj2 = new Fruit();
        $obj3 = new Fruit();
    ?>
</body>
</html>