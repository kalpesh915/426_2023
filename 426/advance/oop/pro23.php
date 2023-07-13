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
            /*abstract public function getChequeBook(){

            }*/

            abstract public function getChequeBook();
        }

        $obj1 = new RBI();
    ?>
</body>
</html>