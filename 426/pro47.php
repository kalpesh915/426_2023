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
         * null coalescing
         * $x ?? 0;
         * if $x is not exist the value of x is return as 0
         */

         $x = 100;
         $y = null;
         $z = $x + ($y ?? 10);
         echo "<hr> answer is ".$z;
    ?>
</body>
</html>