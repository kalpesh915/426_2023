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
        // find maximum out of two numbers with use of UDF

        function findMaximum(int $ip1, int $ip2){
            return ($ip1 > $ip2 ? $ip1 : $ip2);
            //echo "<hr> Program Completed";
        }

        $ans = findMaximum(112, 118);
        echo "<hr> Maximum is $ans";
    ?>
</body>
</html>