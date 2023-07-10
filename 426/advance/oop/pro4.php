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

            function setDetails($nm, $clr){
                $this->name = $nm;
                $this->color = $clr;
            }

            function getDetails(){
                echo "<hr>".$this->name." ".$this->color;
            }
        }
        
        $obj1 = new Fruit();
        $obj1->getDetails();
        $obj1->setDetails("Mango", "Green");
        $obj1->getDetails();
    ?>
</body>
</html>