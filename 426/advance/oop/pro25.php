<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        interface RBI{
            public function getATM();
            public function getUPI();
            public function getCheque();
        }

        class SBI implements RBI{
            public function getATM(){
                echo "<hr> Yes, ATM is Available";
            }

            public function getUPI(){
                echo "<hr> Yes, UPI is Available but working some time";
            }

            public function getCheque(){
                echo "<hr> Yes, Chequebook is Available";
            }
        }
    ?>
</body>
</html>