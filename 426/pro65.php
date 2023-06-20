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
         * Print table of 1 to 10 with nested loop
         */

         echo "<table border='1'>";
         for($i=1; $i<=10; $i++){
             echo "<tr>";
             for($j=1; $j<=10; $j++){
                echo "<td>$j * $i = ".($i*$j)."</td>";
             }
             echo "</tr>";
         }

         echo "</table>";
    ?>
</body>
</html>