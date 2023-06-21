<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function printTable($ip){
            for($i=1; $i<=10; $i++){
                echo "<hr> $ip * $i = ".($ip * $i);
            }
        }
        printTable(31);
    ?>
</body>
</html>