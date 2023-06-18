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
         *  AND Truth Table
         * 
         * Condotion 1          Condition 2         Answer
         * T                    T                   T
         * T                    F                   F
         * F                    T                   F
         * F                    F                   F
         * 
        */

        echo "<hr> ".var_dump( 15 > 5 and 15 > 8);
        echo "<hr> ".var_dump( 15 > 5 and 15 > 18);
        echo "<hr> ".var_dump( 15 > 51 and 15 > 8);
        echo "<hr> ".var_dump( 15 > 51 and 15 > 18);
    ?>
</body>
</html>