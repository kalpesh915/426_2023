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

            function setDetails($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            function getDetails(){
                echo "<hr>".$this->name." ".$this->color;
            }
        }
        
        $obj1 = new Fruit();
        var_dump($obj1 instanceof Fruit);
    ?>
</body>
</html>