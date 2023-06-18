<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr> ".var_dump(11 == 1);
        echo "<hr> ".var_dump(11 == 11);
        echo "<hr> ".var_dump(11 == "11");
        echo "<hr> ".var_dump(11 === "11");
        echo "<hr> ".var_dump(11 > 10);
        echo "<hr> ".var_dump(11 > 11);
        echo "<hr> ".var_dump(11 >= 11);
    ?>
</body>
</html>