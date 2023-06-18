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
         *  OR Truth Table
         * 
         * Condotion 1          Condition 2         Answer
         * T                    T                   T
         * T                    F                   T
         * F                    T                   T
         * F                    F                   F
         * 
        */

        echo "<hr> ".var_dump( 15 > 5 or 15 > 8);
        echo "<hr> ".var_dump( 15 > 5 or 15 > 18);
        echo "<hr> ".var_dump( 15 > 51 or 15 > 8);
        echo "<hr> ".var_dump( 15 > 51 or 15 > 18);
    ?>
</body>
</html>