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

            public function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            public function getDetails(){
                echo "<hr> Fruit Name is ".$this->name." Color is ".$this->color;
            }

        }
        
        $obj1 = new Fruit("Mango", "Green");
        $obj1->getDetails();
        $obj2 = new Fruit("Apple", "red");
        $obj2->getDetails();
    ?>
</body>
</html>