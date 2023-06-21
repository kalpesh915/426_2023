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
        /**
         * pass by reference concept
         */

        function addTen(&$ip1){
            $ip1 += 10; // global reference
            echo "<hr> In Function \$ip1 is $ip1"; //20
        }

        $ip1 = 10; // global
        echo "<hr> Before Function Call \$ip1 is $ip1"; // 10
        addTen($ip1);
        echo "<hr> After Function Call \$ip1 is $ip1"; // 20
    ?>
</body>
</html>