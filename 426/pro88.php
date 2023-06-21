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

        function cube(int $ip1){
            $ans = $ip1 * $ip1 * $ip1;
            return $ans;

            // return $ip1 * $ip1 * $ip1;
        }

        $answer = cube(5);
        echo "$answer";

    ?>
</body>
</html>