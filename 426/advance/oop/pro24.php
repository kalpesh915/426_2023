<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        abstract class RBI{
            abstract public function getChequeBook();
            abstract public function getATM();
            // non abstract
            public function drinkingWater(){
                echo "<hr>Yes, Available to All Branches ";
            }
        }

        class SBI extends RBI{
            public function getChequeBook(){
                echo "<hr> Yes, Cheque Book is Available";
            }

            public function getATM(){
                echo "<hr> Yes, ATM is Available";
            }
        }

        class HDFC extends RBI{
            public function getChequeBook(){
                echo "<hr> Yes, Cheque Book is Available";
            }

            public function getATM(){
                echo "<hr> Yes, ATM is Available";
            }
        }

        class AXIS extends RBI{
            public function getChequeBook(){
                echo "<hr> Yes, Cheque Book is Available";
            }

            public function getATM(){
                echo "<hr> Yes, ATM is Available";
            }
        }

        $obj1 = new AXIS();
        $obj1->getChequeBook();
        $obj1->getATM();
        $obj1->drinkingWater();
    ?>
</body>
</html>