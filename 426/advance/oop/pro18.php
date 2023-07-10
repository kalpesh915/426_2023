<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // example of inheritance with protected access modifier

        class Math1{
            protected function sum($ip1, $ip2){
                echo "<hr> Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
            }

            public function sub($ip1, $ip2){
                echo "<hr> Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
            }
        }

        
        class Math2 extends Math1{
            public function mul($ip1, $ip2){
                echo "<hr> Mul of $ip1 and $ip2 is ".($ip1 * $ip2);
            }

            public function div($ip1, $ip2){
                echo "<hr> Div of $ip1 and $ip2 is ".($ip1 / $ip2);
            }

        }

        class Math3 extends Math2{
            public function mod($ip1, $ip2){
                echo "<hr> Mod of $ip1 and $ip2 is ".($ip1 % $ip2);
                $this->sum($ip1, $ip2);
            }
        }

        $obj1 = new Math3();
        //$obj1->sum(111, 25);
        $obj1->sub(111, 25);
        $obj1->mul(111, 25);
        $obj1->div(111, 25);
        $obj1->mod(111, 25);
    ?>
</body>
</html>