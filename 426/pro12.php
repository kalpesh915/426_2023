<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip = 15; // global

        function printer(){
            echo "<hr>Value of ip is ".$GLOBALS["ip"];
        }

        printer();
    ?>
</body>
</html>