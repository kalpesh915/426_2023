<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        trait Math1{
            public function sum($ip1, $ip2){
                echo "<hr> Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
            }
            public function sub($ip1, $ip2){
                echo "<hr> Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
            }
        }

        trait Math2{
            public function mul($ip1, $ip2){
                echo "<hr> Mul of $ip1 and $ip2 is ".($ip1 * $ip2);
            }
            public function div($ip1, $ip2){
                echo "<hr> Div of $ip1 and $ip2 is ".($ip1 / $ip2);
            }
        }

        trait Math3{
            public function mod($ip1, $ip2){
                echo "<hr> Mod of $ip1 and $ip2 is ".($ip1 % $ip2);
            }
            public function square($ip1, $ip2){
                echo "<hr> Square of $ip1  is ".($ip1 * $ip1);
            }
        }

        class Calculator{
            use Math1, Math2, Math3;
        }

        $obj1 = new Calculator();
        $obj1->sum(115, 58);
        $obj1->sub(115, 58);
        $obj1->mul(115, 58);
        $obj1->div(115, 58);
        $obj1->mod(115, 58);
        $obj1->square(5);
    ?>
</body>
</html>