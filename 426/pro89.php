<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
        in C Language

        int div(int ip1, int ip2){
            return ip1 / ip2;
        }
    */

        function div(int $ip1, $ip2) : int{
            //return $ip1 / $ip2;
            return (int) ($ip1 / $ip2);
        }

        $answer = div(51, 6);
        echo "$answer";

    ?>
</body>
</html>