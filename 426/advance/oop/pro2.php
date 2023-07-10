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
            public $name = "Banana";
            public $color = "Yellow";

            function getDetails(){
                echo $this->name." ".$this->color;
            }
        }
        
        $obj1 = new Fruit();
        $obj1->getDetails();
    ?>
</body>
</html>