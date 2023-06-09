<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //example of constant

        function printer(){
            $ip = 1;
            echo " $ip";
            $ip++; // increment
        }

        for($i=1; $i<=10; $i++){
            printer();
        }
    ?>
</body>
</html>