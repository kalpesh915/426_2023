<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = 10; //global
        $ip2 = 15; //global
        function msg(){
            $fname = "jigar"; // local
        }
        print_r($GLOBALS);
    ?>
</body>
</html>