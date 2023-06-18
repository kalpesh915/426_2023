<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr> ".var_dump( !15 > 5 and 15 > 8);
        echo "<hr> ".var_dump( !(15 > 5 and 15 > 8));
    ?>
</body>
</html>