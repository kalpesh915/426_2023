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
         * xor
         * ------
         * condition 1      condition 2     answer
         * true             false           false
         * true             true            true
         * false            true            false
         * false            false           false
         */

        echo "<hr> ".var_dump( (15 > 5) xor (15 > 81));
        echo "<hr> ".var_dump( (15 > 5) xor (15 > 18));
    ?>
</body>
</html>