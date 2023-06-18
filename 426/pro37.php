<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr> ".var_dump(11 <=> 10);   //  1
        echo "<hr> ".var_dump(11 <=> 101);  // -1
        echo "<hr> ".var_dump(11 <=> 11);   //  0
    ?>
</body>
</html>